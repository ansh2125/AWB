<script src="https://cdn.jsdelivr.net/npm/peerjs@1.3.2/dist/peerjs.min.js"></script>

<?php include('includes/header.php'); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Welcome!</h1>
        <p class="lead text-primary font-weight-bold"><?php echo $_SESSION['fullname']; ?></p>
        <hr class="my-4">
        <p>AWB - Chat</p>
        
        <div class="row">
            <div class="col-md-4">
                <h3>Users Open to Trip</h3>
                <input type="text" id="search-bar" class="form-control mb-2" placeholder="Search by name or location">
                <ul id="user-list" class="list-group">
                    <!-- User list will be populated here via AJAX -->
                </ul>
            </div>
            <div class="col-md-8">
                <h3 id="chat-user-name">Select a user to chat</h3>
                <div id="chat-box" class="border p-3" style="height: 300px; overflow-y: scroll;">
                    <!-- Chat messages will be displayed here -->
                </div>
                <textarea id="message" class="form-control mt-2" rows="3" placeholder="Type your message here..."></textarea>
                <input type="file" id="file-input" class="mt-2" accept=".jpg,.jpeg,.png,.mp3,.mp4,.wav,.ogg" multiple>
                <button id="send-message" class="btn btn-primary mt-2">Send</button>
                
                <!-- Inline call options -->
                <div id="call-options" style="display:none; margin-top: 10px;">
                    <button id="video-call" class="btn btn-info">Video Call</button>
                    <button id="audio-call" class="btn btn-secondary">Audio Call</button>
                </div>
            </div>
        </div>
    </div>
</div>

<video id="remote-video" autoplay style="display:none; max-width: 100%;"></video>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
let localStream;
let peerConnection;
const servers = { iceServers: [{ urls: 'stun:stun.l.google.com:19302' }] };

$(document).ready(function() {
    loadUsers();

    $(document).on('dblclick', '.user-item', function() {
        $('.user-item').removeClass('active');
        $(this).addClass('active');
        var receiverId = $(this).data('id');
        var receiverName = $(this).data('name');
        $('#chat-user-name').text(receiverName);
        loadChat(receiverId);
        startAutoRefresh(receiverId);

        // Show call options
        $('#call-options').show();
    });

    $('#video-call').click(function() {
        startCall(true);
    });

    $('#audio-call').click(function() {
        startCall(false);
    });

    $('#send-message').click(function() {
        var message = $('#message').val();
        var receiverId = $('.user-item.active').data('id');
        var fileInput = $('#file-input')[0];
        var formData = new FormData();

        if (message) {
            formData.append('message', message);
        }
        if (fileInput.files.length > 0) {
            for (var i = 0; i < fileInput.files.length; i++) {
                formData.append('files[]', fileInput.files[i]);
            }
        }
        formData.append('receiver_id', receiverId);

        if (receiverId) {
            $.ajax({
                url: 'send_message.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#message').val('');
                    $('#file-input').val('');
                    loadChat(receiverId);
                }
            });
        }
    });

    $('#search-bar').on('input', function() {
        var query = $(this).val().toLowerCase();
        $('.user-item').each(function() {
            var name = $(this).data('name').toLowerCase();
            var location = $(this).data('location').toLowerCase();
            if (name.includes(query) || location.includes(query)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});

function loadUsers() {
    $.get('get_users.php', function(data) {
        $('#user-list').html(data);
    });
}

function loadChat(receiverId) {
    $.get('get_chat.php', { receiver_id: receiverId }, function(data) {
        $('#chat-box').html(data);
        $.post('mark_messages_as_seen.php', { receiver_id: receiverId });
    });
}


function startAutoRefresh(receiverId) {
    clearInterval(window.chatRefreshInterval);
    window.chatRefreshInterval = setInterval(function() {
        loadChat(receiverId);
    }, 1000);
}

async function startCall(isVideo) {
    localStream = await navigator.mediaDevices.getUserMedia({ 
        video: isVideo, 
        audio: true 
    });

    peerConnection = new RTCPeerConnection(servers);
    
    localStream.getTracks().forEach(track => peerConnection.addTrack(track, localStream));

    peerConnection.ontrack = (event) => {
        const remoteVideo = document.getElementById('remote-video');
        remoteVideo.srcObject = event.streams[0];
        remoteVideo.style.display = 'block'; // Show remote video
    };

    const offer = await peerConnection.createOffer();
    await peerConnection.setLocalDescription(offer);

    // Send offer to signaling server (implement signaling logic here)
    // Example: socket.send(JSON.stringify({ offer: offer }));
    
    peerConnection.onicecandidate = (event) => {
        if (event.candidate) {
            // Send ICE candidate to signaling server
            // Example: socket.send(JSON.stringify({ iceCandidate: event.candidate }));
        }
    };
}

function endCall() {
    if (peerConnection) {
        peerConnection.close();
        peerConnection = null;
    }
    localStream.getTracks().forEach(track => track.stop());
    document.getElementById('remote-video').style.display = 'none'; // Hide remote video
}
</script>

<?php include('includes/footer.php'); ?>
<?php
/*
  ************************************************************
  *                        AWB                                 *
  *                       Copyright                              *
  *   Gyan Prakash Pandey   *   Ansh Shukla   *   Shiwan Tripathi   *
  *   Code is open source, but please do not remove this credit. *
  ************************************************************
*/?>