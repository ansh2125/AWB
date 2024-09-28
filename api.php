<?php
// Set headers to allow CORS and return JSON
header("Access-Control-Allow-Origin: *");

header("Content-Type: application/json; charset=UTF-8");

// Example data for 25 popular tourist destinations in India
$places = [
    [
        "name" => "Taj Mahal",
        "location" => "Agra, Uttar Pradesh",
        "estimated_budget" => "₹10,000 - ₹15,000",
        "famous_food" => "Petha, Mughlai Cuisine",
        "nearby_places" => ["Agra Fort", "Mehtab Bagh", "Itmad-ud-Daulah's Tomb"],
        "nearest_airport" => "Agra Airport (AGR)",
        "best_time_to_visit" => "October to March",
        "precautions" => [
            "Stay hydrated, especially in summer.",
            "Be respectful of the site; avoid loud noises.",
            "Secure your belongings while visiting."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_taj_mahal_video_link",
        "image" => "https://example.com/images/taj_mahal.jpg",
    ],
    [
        "name" => "Kedarnath Temple",
        "location" => "Kedarnath, Uttarakhand",
        "estimated_budget" => "₹6,000 - ₹10,000",
        "famous_food" => "Aloo Puri, Bhatt Ki Chudkani",
        "nearby_places" => ["Badrinath", "Gaurikund", "Triyuginarayan Temple"],
        "nearest_airport" => "Jolly Grant Airport (Dehradun)",
        "best_time_to_visit" => "May to October",
        "precautions" => [
            "Ensure to carry sufficient warm clothing as temperatures can drop significantly.",
            "Stay hydrated and acclimatize to the altitude.",
            "Follow local guidelines and respect the sanctity of the temple.",
            "Travel with a certified guide if you're not familiar with the trekking routes."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_kedarnath_video_link",
        "image" => "https://example.com/images/kedarnath.jpg",
    ],
    [
        "name" => "Gateway of India",
        "location" => "Mumbai, Maharashtra",
        "estimated_budget" => "₹8,000 - ₹12,000",
        "famous_food" => "Vada Pav, Pav Bhaji",
        "nearby_places" => ["Marine Drive", "Colaba Market", "Elephanta Caves"],
        "nearest_airport" => "Chhatrapati Shivaji Maharaj International Airport (BOM)",
        "best_time_to_visit" => "November to February",
        "precautions" => [
            "Be cautious of pickpockets in crowded areas.",
            "Avoid visiting late at night alone.",
            "Stay updated on local weather conditions."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_gateway_of_india_video_link",
        "image" => "https://example.com/images/gateway_of_india.jpg",
    ],
    [
        "name" => "Jaipur City",
        "location" => "Jaipur, Rajasthan",
        "estimated_budget" => "₹5,000 - ₹10,000",
        "famous_food" => "Dal Baati Churma, Gatte Ki Sabzi",
        "nearby_places" => ["Hawa Mahal", "Amber Fort", "City Palace"],
        "nearest_airport" => "Jaipur International Airport (JAI)",
        "best_time_to_visit" => "October to March",
        "precautions" => [
            "Dress modestly when visiting temples.",
            "Avoid drinking tap water.",
            "Negotiate taxi fares before starting your journey."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_jaipur_video_link",
        "image" => "https://example.com/images/jaipur.jpg",
    ],
    [
        "name" => "Varanasi",
        "location" => "Uttar Pradesh",
        "estimated_budget" => "₹5,000 - ₹8,000",
        "famous_food" => "Kachori, Lassi",
        "nearby_places" => ["Sarnath", "Dashashwamedh Ghat", "Assi Ghat"],
        "nearest_airport" => "Lal Bahadur Shastri Airport (VNS)",
        "best_time_to_visit" => "October to March",
        "precautions" => [
            "Beware of strong currents when near the Ganges.",
            "Respect local customs and traditions.",
            "Avoid public displays of affection."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_varanasi_video_link",
        "image" => "https://example.com/images/varanasi.jpg",
    ],
    [
        "name" => "Goa Beaches",
        "location" => "Goa",
        "estimated_budget" => "₹10,000 - ₹15,000",
        "famous_food" => "Fish Curry, Bebinca",
        "nearby_places" => ["Anjuna Beach", "Baga Beach", "Fort Aguada"],
        "nearest_airport" => "Goa International Airport (GOI)",
        "best_time_to_visit" => "November to February",
        "precautions" => [
            "Avoid traveling alone at night.",
            "Keep valuables secure on the beach.",
            "Drink responsibly and stay hydrated."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_goa_video_link",
        "image" => "https://example.com/images/goa.jpg",
    ],
    [
        "name" => "Kerala Backwaters",
        "location" => "Alleppey, Kerala",
        "estimated_budget" => "₹7,000 - ₹12,000",
        "famous_food" => "Appam, Karimeen Polichathu",
        "nearby_places" => ["Kumarakom", "Vembanad Lake", "Marari Beach"],
        "nearest_airport" => "Cochin International Airport (COK)",
        "best_time_to_visit" => "September to March",
        "precautions" => [
            "Beware of monsoon flooding in July and August.",
            "Follow safety guidelines while on houseboats.",
            "Respect local wildlife in the area."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_kerala_video_link",
        "image" => "https://example.com/images/kerala.jpg",
    ],
    [
        "name" => "Hampi",
        "location" => "Karnataka",
        "estimated_budget" => "₹5,000 - ₹8,000",
        "famous_food" => "Ragi Mudde, Bisi Bele Bath",
        "nearby_places" => ["Vijaya Vitthala Temple", "Virupaksha Temple", "Hampi Bazaar"],
        "nearest_airport" => "Hubli Airport (HBX)",
        "best_time_to_visit" => "October to February",
        "precautions" => [
            "Carry water and snacks while exploring ruins.",
            "Be cautious while climbing hills.",
            "Respect the heritage sites."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_hampi_video_link",
        "image" => "https://example.com/images/hampi.jpg",
    ],
    [
        "name" => "Darjeeling",
        "location" => "West Bengal",
        "estimated_budget" => "₹8,000 - ₹12,000",
        "famous_food" => "Darjeeling Tea, Momo",
        "nearby_places" => ["Tiger Hill", "Batasia Loop", "Peace Pagoda"],
        "nearest_airport" => "Bagdogra Airport (IXB)",
        "best_time_to_visit" => "March to May, September to November",
        "precautions" => [
            "Dress warmly; temperatures can drop at night.",
            "Be cautious of altitude sickness.",
            "Follow local guidelines during treks."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_darjeeling_video_link",
        "image" => "https://example.com/images/darjeeling.jpg",
    ],
    [
        "name" => "Mysore Palace",
        "location" => "Mysuru, Karnataka",
        "estimated_budget" => "₹4,000 - ₹6,000",
        "famous_food" => "Mysore Pak, Ragi Mudde",
        "nearby_places" => ["Brindavan Gardens", "Chamundi Hill", "St. Philomena's Church"],
        "nearest_airport" => "Mysore Airport (MYQ)",
        "best_time_to_visit" => "October to March",
        "precautions" => [
            "Avoid touching artifacts in the palace.",
            "Respect photography rules.",
            "Stay hydrated and wear sunscreen."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_mysore_palace_video_link",
        "image" => "https://example.com/images/mysore_palace.jpg",
    ],
    [
        "name" => "Ajanta and Ellora Caves",
        "location" => "Maharashtra",
        "estimated_budget" => "₹6,000 - ₹9,000",
        "famous_food" => "Puran Poli, Thalipeeth",
        "nearby_places" => ["Aurangabad", "Grishneshwar Temple", "Bibi Ka Maqbara"],
        "nearest_airport" => "Aurangabad Airport (IXU)",
        "best_time_to_visit" => "November to March",
        "precautions" => [
            "Avoid climbing on sculptures.",
            "Stay within marked paths.",
            "Wear comfortable shoes for walking."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_ajanta_ellora_video_link",
        "image" => "https://example.com/images/ajanta_ellora.jpg",
    ],
    [
        "name" => "Ranthambore National Park",
        "location" => "Rajasthan",
        "estimated_budget" => "₹10,000 - ₹15,000",
        "famous_food" => "Dal Baati, Gatte Ki Sabzi",
        "nearby_places" => ["Ranthambore Fort", "Kachida Valley", "Raj Bagh Ruins"],
        "nearest_airport" => "Jaipur International Airport (JAI)",
        "best_time_to_visit" => "October to June",
        "precautions" => [
            "Follow safety guidelines while on safari.",
            "Stay in designated areas during wildlife spotting.",
            "Avoid littering in the park."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_ranthambore_video_link",
        "image" => "https://example.com/images/ranthambore.jpg",
    ],
    [
        "name" => "Rishikesh",
        "location" => "Uttarakhand",
        "estimated_budget" => "₹4,000 - ₹7,000",
        "famous_food" => "Aloo Tikki, Chaat",
        "nearby_places" => ["Haridwar", "Neelkanth Mahadev Temple", "Laxman Jhula"],
        "nearest_airport" => "Dehradun Airport (DED)",
        "best_time_to_visit" => "September to November, March to May",
        "precautions" => [
            "Follow safety instructions for river rafting.",
            "Be cautious near riverbanks.",
            "Respect the tranquility of the spiritual atmosphere."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_rishikesh_video_link",
        "image" => "https://example.com/images/rishikesh.jpg",
    ],
    [
        "name" => "Andaman Islands",
        "location" => "Andaman and Nicobar Islands",
        "estimated_budget" => "₹15,000 - ₹20,000",
        "famous_food" => "Seafood, Coconut Water",
        "nearby_places" => ["Havelock Island", "Neil Island", "Cellular Jail"],
        "nearest_airport" => "Veer Savarkar International Airport (IXZ)",
        "best_time_to_visit" => "October to May",
        "precautions" => [
            "Be cautious of strong currents in the sea.",
            "Avoid littering on beaches.",
            "Follow local guidelines for marine activities."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_andaman_video_link",
        "image" => "https://example.com/images/andaman.jpg",
    ],
    [
        "name" => "Khajuraho Temples",
        "location" => "Madhya Pradesh",
        "estimated_budget" => "₹5,000 - ₹9,000",
        "famous_food" => "Dal Bafla, Chaat",
        "nearby_places" => ["Panna National Park", "Jewel of India Museum", "Raneh Falls"],
        "nearest_airport" => "Khajuraho Airport (HJR)",
        "best_time_to_visit" => "September to March",
        "precautions" => [
            "Respect local customs when visiting temples.",
            "Avoid climbing on sculptures.",
            "Stay hydrated and wear sunscreen."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_khajuraho_video_link",
        "image" => "https://example.com/images/khajuraho.jpg",
    ],
    [
        "name" => "Sundarbans National Park",
        "location" => "West Bengal",
        "estimated_budget" => "₹8,000 - ₹12,000",
        "famous_food" => "Sundarbans Crab, Hilsa Fish",
        "nearby_places" => ["Pakhiralay", "Sajnekhali", "Ghosh Dighi"],
        "nearest_airport" => "Netaji Subhas Chandra Bose International Airport (CCU)",
        "best_time_to_visit" => "September to March",
        "precautions" => [
            "Stay within designated paths during exploration.",
            "Be cautious of wild animals.",
            "Follow safety guidelines from local guides."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_sundarbans_video_link",
        "image" => "https://example.com/images/sundarbans.jpg",
    ],
    [
        "name" => "Nainital",
        "location" => "Uttarakhand",
        "estimated_budget" => "₹6,000 - ₹10,000",
        "famous_food" => "Bhelpuri, Aloo Tikki",
        "nearby_places" => ["Naini Lake", "Snow View Point", "Naina Devi Temple"],
        "nearest_airport" => "Pantnagar Airport (PGH)",
        "best_time_to_visit" => "March to June, September to November",
        "precautions" => [
            "Be cautious while boating on Naini Lake.",
            "Follow local guidelines for trekking.",
            "Keep warm clothing handy."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_nainital_video_link",
        "image" => "https://example.com/images/nainital.jpg",
    ],
    [
        "name" => "Leh-Ladakh",
        "location" => "Jammu and Kashmir",
        "estimated_budget" => "₹15,000 - ₹25,000",
        "famous_food" => "Momos, Thukpa",
        "nearby_places" => ["Pangong Lake", "Nubra Valley", "Khardung La Pass"],
        "nearest_airport" => "Kushok Bakula Rimpochee Airport (IXL)",
        "best_time_to_visit" => "May to September",
        "precautions" => [
            "Acclimatize to high altitudes.",
            "Carry sufficient warm clothing.",
            "Stay hydrated."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_leh_ladakh_video_link",
        "image" => "https://example.com/images/leh_ladakh.jpg",
    ],
    [
        "name" => "Mahabalipuram",
        "location" => "Tamil Nadu",
        "estimated_budget" => "₹4,000 - ₹7,000",
        "famous_food" => "Seafood, Filter Coffee",
        "nearby_places" => ["Pancha Rathas", "Shore Temple", "Arjuna's Penance"],
        "nearest_airport" => "Chennai International Airport (MAA)",
        "best_time_to_visit" => "November to February",
        "precautions" => [
            "Avoid swimming in rough seas.",
            "Be cautious while exploring rocky areas.",
            "Stay hydrated."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_mahabalipuram_video_link",
        "image" => "https://example.com/images/mahabalipuram.jpg",
    ],
    [
        "name" => "Pondicherry",
        "location" => "Puducherry",
        "estimated_budget" => "₹5,000 - ₹8,000",
        "famous_food" => "Biryani, French Pastries",
        "nearby_places" => ["Auroville", "Serenity Beach", "Sri Aurobindo Ashram"],
        "nearest_airport" => "Puducherry Airport (PNY)",
        "best_time_to_visit" => "October to March",
        "precautions" => [
            "Respect local culture and traditions.",
            "Avoid littering on beaches.",
            "Stay hydrated in the tropical climate."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_pondicherry_video_link",
        "image" => "https://example.com/images/pondicherry.jpg",
    ],
    [
        "name" => "Khajjiar",
        "location" => "Himachal Pradesh",
        "estimated_budget" => "₹5,000 - ₹10,000",
        "famous_food" => "Chana Madra, Dham",
        "nearby_places" => ["Dalhousie", "Kalatope Wildlife Sanctuary", "Kalatop Khajjiar Sanctuary"],
        "nearest_airport" => "Gaggal Airport (DHM)",
        "best_time_to_visit" => "March to June, September to October",
        "precautions" => [
            "Dress warmly in winter.",
            "Be cautious while trekking.",
            "Stay on marked trails."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_khajjiar_video_link",
        "image" => "https://example.com/images/khajjiar.jpg",
    ],
    [
        "name" => "Chikmagalur",
        "location" => "Karnataka",
        "estimated_budget" => "₹6,000 - ₹10,000",
        "famous_food" => "Coffee, Bisi Bele Bath",
        "nearby_places" => ["Mullayanagiri", "Baba Budangiri", "Coffee Plantations"],
        "nearest_airport" => "Mangalore International Airport (IXE)",
        "best_time_to_visit" => "September to March",
        "precautions" => [
            "Avoid trekking during the monsoon.",
            "Follow safety guidelines for coffee plantations.",
            "Stay hydrated and wear sunscreen."
        ],
        "video_link" => "https://www.youtube.com/watch?v=your_chikmagalur_video_link",
        "image" => "https://example.com/images/chikmagalur.jpg",
    ],
];

// Get the HTTP method of the request (GET)
$method = $_SERVER['REQUEST_METHOD'];

// Example coordinates for nearby places and airport
$latitude = isset($_GET['lat']) ? $_GET['lat'] : null;
$longitude = isset($_GET['lon']) ? $_GET['lon'] : null;

switch($method) {
    case 'GET':
        // If coordinates are passed, calculate distances
        if ($latitude && $longitude) {
            foreach ($places as &$place) {
                $place['distance_from_location'] = calculateDistance($latitude, $longitude, getCoordinates($place['location']));
            }
        }
        
        // Return the list of places
        echo json_encode($places);
        break;

    default:
        http_response_code(405);  // Method not allowed
        echo json_encode(["message" => "Method not allowed"]);
        break;
}

// Function to calculate the distance between two coordinates
function calculateDistance($lat1, $lon1, $coords2) {
    $lat2 = $coords2['lat'];
    $lon2 = $coords2['lon'];
    
    $earth_radius = 6371;  // Earth radius in kilometers

    $dLat = deg2rad($lat2 - $lat1);
    $dLon = deg2rad($lon2 - $lon1);

    $a = sin($dLat / 2) * sin($dLat / 2) +
         cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
         sin($dLon / 2) * sin($dLon / 2);

    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

    return $earth_radius * $c;  // Distance in kilometers
}

// Function to get coordinates for a location (static data)
function getCoordinates($location) {
    $coords = [
        "Agra, Uttar Pradesh" => ["lat" => 27.1751, "lon" => 78.0421],
        "Mumbai, Maharashtra" => ["lat" => 19.0760, "lon" => 72.8777],
        "Jaipur, Rajasthan" => ["lat" => 26.9124, "lon" => 75.7873],
        "Alleppey, Kerala" => ["lat" => 9.4981, "lon" => 76.3388],
        "Amritsar, Punjab" => ["lat" => 31.6340, "lon" => 74.8723],
        "Kedarnath, Uttarakhand" => ["lat" => 30.7333, "lon" => 79.0669],
        "Varanasi, Uttar Pradesh" => ["lat" => 25.2820, "lon" => 82.9560],
        "Goa" => ["lat" => 15.2993, "lon" => 74.1240],
        "Hampi, Karnataka" => ["lat" => 15.3352, "lon" => 76.4610],
        "Darjeeling, West Bengal" => ["lat" => 27.0369, "lon" => 88.2622],
        "Mysuru, Karnataka" => ["lat" => 12.2958, "lon" => 76.6394],
        "Ajanta, Maharashtra" => ["lat" => 20.5497, "lon" => 75.6882],
        "Ranthambore National Park, Rajasthan" => ["lat" => 26.0173, "lon" => 76.6369],
        "Rishikesh, Uttarakhand" => ["lat" => 30.0866, "lon" => 78.2672],
        "Andaman Islands" => ["lat" => 11.6230, "lon" => 92.7265],
        "Khajuraho, Madhya Pradesh" => ["lat" => 24.8308, "lon" => 79.9192],
        "Sundarbans, West Bengal" => ["lat" => 21.9499, "lon" => 88.7470],
        "Nainital, Uttarakhand" => ["lat" => 29.3802, "lon" => 79.4549],
        "Leh, Jammu and Kashmir" => ["lat" => 34.1526, "lon" => 77.5775],
        "Mahabalipuram, Tamil Nadu" => ["lat" => 12.6200, "lon" => 80.1939],
        "Pondicherry" => ["lat" => 11.9332, "lon" => 79.8125],
        "Khajjiar, Himachal Pradesh" => ["lat" => 32.5420, "lon" => 76.0010],
        "Chikmagalur, Karnataka" => ["lat" => 13.3220, "lon" => 75.7776],
        // Add coordinates for more locations as needed
    ];

    return isset($coords[$location]) ? $coords[$location] : ["lat" => 0, "lon" => 0];
}
?>

<?php
/*
  ************************************************************
  *                        AWB                                 *
  *                       Copyright                              *
  *   Gyan Prakash Pandey   *   Ansh Shukla   *   Shiwan Tripathi   *
  *   Code is open source, but please do not remove this credit. *
  ************************************************************
*/?>
