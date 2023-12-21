<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services=[
            // limo services
                  [
                    'name'=>"Sightseeing And Tours",
                    'description'=>"Experience the vibrant city of New York with our sightseeing and tour packages.

                    Our knowledgeable chauffeurs will guide you through the iconic landmarks, cultural attractions, and hidden gems of NYC.
                    
                    Whether you're interested in exploring Times Square, Central Park, the Statue of Liberty, or any other famous destinations, our limousines provide a comfortable and stylish way to discover the city.",
                    "image"=>"tours.jpg",
                    "alt"=>"Sightseeing And Tours",
                    'main_service_id'=>1,
                    'url'=>"sightseeing-and-tours",
                    'title'=>"sightseeing-and-tours",
                    "seo_description"=>"Luxurious. Comfortable. Professional. A premium limousine service in New York. An exceptional experience in your journey with elegance and luxury."
                  ],

                  [
                    'name'=>"Night In Town",
                    'description'=>"Make your evenings and nights in New York City unforgettable with our limo services for dinner outings, theater shows, concerts, and nightlife experiences.

                    Our professional drivers will ensure a safe and stylish transportation experience, allowing you to relax and enjoy your night out without worrying about parking or designated drivers.",
                    "image"=>"night.jpg",
                    "alt"=>"Night In Town",
                    'main_service_id'=>1,
                    'url'=>"nyc-limo-services",
                    'title'=>"Night In Town",
                    "seo_description"=>"Luxurious. Comfortable. Professional. A premium limousine service in New York. An exceptional experience in your journey with elegance and luxury."
                  ],
                  
                  [
                    'name'=>"Travelling With Kids",
                    'description'=>"Travelling with kids can be stressful, but it doesn't have to be.

                    At our limousine service in New York, we understand the importance of ensuring that your children are safe and comfortable during your journey.
                    
                    That's why we provide child seats and booster seats upon request, with extra charges .
                    
                    We also offer spacious vehicles with plenty of legroom to accommodate your entire family, so you can travel in style and comfort.
                    
                    Our professional and experienced chauffeurs are also trained to provide a courteous and safe service, ensuring that your journey is a stress-free and enjoyable experience for both you and your kids.
                    
                    Book your next ride with us and let us take care of your family's transportation needs.
                    
                    our drivers are experienced and trained to handle all kinds of family travel needs.",
                    "image"=>"Travelling with Kids.jpg",
                    "alt"=>"Travelling  With Kids",
                    'main_service_id'=>1,
                    'url'=>"limousine-services-nyc",
                    'title'=>"Travelling With Kids",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
                  ],
                  [
                    'name'=>"special occasion",
                    'description'=>"Our party limousine service company works across the Hudson Valley, NY region, 24 hours a day, 7 days a week.

                    Whether you’re heading to the Hudson Valley wineries, planning an epic night out in the city, or heading down the shore for a weekend of revelry, Bright Embire Services has your needs covered.
                    
                    Whatever the Occasion, You Deserve It!
                    At Bright Embire Services, we know how stressful planning transportation for your special event can be.
                    
                    Why worry when you can hire our special occasion limousine service? Our GPS-enabled fleet provides reliable and safe limousines for every occasion, including bachelor and bachelorette parties, quinceaneras, birthday parties, family reunions, special work events, and more.
                    
                    We’ll plan the best route, anticipate and address travel problems in advance, and send a modern, luxurious vehicle right to your door.
                    
                    No matter what size your party is, Majestic Transportation is the limousine service company in Hudson Valley, NY to count on!",
                    "image"=>"Special Occasions.jpg",
                    "alt"=>"special occasion",
                    'main_service_id'=>1,
                    'url'=>"limousine-company",
                    'title'=>"special occasion",
                    "seo_description"=>"limousine company"
                  ],
                  [
                    'name'=>"Luxury Limo Service",
                    'description'=>"For ultimate flexibility and convenience, our hourly limousine services allow you to enjoy the luxury of a private chauffeur at your disposal.

                    Whether you need transportation for meetings, shopping trips, or multiple destinations, our fleet of reliable limousines is at your service.
                    
                    Experience the epitome of luxury and comfort with our NYC Limo Services.
                    
                    Contact us today to book your limousine and let us elevate your transportation experience in the bustling city of New York.",
                    "image"=>"Hourly.jpg",
                    "alt"=>"Hourly limousine",
                    'main_service_id'=>1,
                    'url'=>"professional-drivers",
                    'title'=>"Premier Car and Limo Service in NYC | Decades Car Service NYC",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
                  ],
                  [
                    'name'=>"casinos",
                    'description'=>"Looking for a luxurious way to get to your favorite casinos? Look no further than our top-rated casino transportation service.

                    We provide comfortable and safe rides to all major casinos in the New York area. Our chauffeurs are experienced and professional, ensuring you have a hassle-free experience from start to finish.
                    
                    Book now and arrive at the casino in style.",
                    "image"=>"coasions.jpg",
                    "alt"=>"casonics",
                    'main_service_id'=>1,
                    'url'=>"casinos",
                    'title'=>"casinos",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
                  ],
                  [
                    'name'=>"Wedding",
                    'description'=>"At Bright Empire , we understand that your wedding day is one of the most important days of your life.

                    That’s why we offer a comprehensive wedding limousine service that can help make your big day unforgettable.
                    
                    From luxurious sedans to spacious limousines, we have the perfect vehicle for your needs.
                    
                    Our team of experienced drivers will ensure that you and your wedding party arrive at each destination on time and in style.
                    
                    We offer a range of wedding packages to fit your specific needs, including transportation for the bride and groom, the entire wedding party, or even out-of-town guests.
                    
                    Our wedding packages also include decorations to match the theme of your wedding, chilled champagne, and a red carpet service.
                    
                    We know that wedding planning can be stressful, so we strive to make your transportation as easy as possible.
                    
                    Our team will work with you to plan out all the details of your transportation, from the pickup locations to the final drop-off.
                    
                    Our drivers are also equipped with GPS technology to ensure that they take the most efficient routes possible, avoiding any unnecessary delays.
                    
                    At Bright Empire , we are committed to providing exceptional service to our customers.
                    
                    Let us help you make your special day even more unforgettable with our premier wedding limousine service
                    
                    ",
                    "image"=>"wedding service.jpg",
                    "alt"=>"wedding service",
                    'main_service_id'=>1,
                    'url'=>"nyc-limo",
                    'title'=>"Wedding limo service",
                    "seo_description"=>"nyc limo"
                  ],
                 
                  [
                    'name'=>"VIP TRANSPORTATION",
                    'description'=>"With Bright Empire City to City rides, the ease of long-distance travel is more comfortable than ever.

                    With our limo service New York you’ll save time by skipping the airports and train stations, and can instead use the travel time how you’d like — private phone calls, last-minute presentation prep, or even catching up on sleep.
                    
                    Our chauffeurs are bound by discretion and give you the space and privacy you need to deliver your best.",
                    "image"=>"Maximize your time.jpg",
                    "alt"=>"Maximize your time",
                    'main_service_id'=>1,
                    'url'=>"limo-service-new-york",
                    'title'=>"best car service nyc",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car ,with best car service nyc limo service nyc "
                  ],
                  [
                    'name'=>"Prom",
                    'description'=>"Prom nights and homecomings are special occasions to remember, and at Bright Empire, we offer every accommodation and extra amenities necessary to ensure your night will be memorable.

                    Bright Empire provides five-star limo services for special events, including homecoming, prom, graduation or any other special school occasion.
                    
                    Our professionally chauffeured luxury vehicles are equipped with state-of-the-art features including GPS tracking system, flat screen TVs, and surround sound stereo. you will enjoy your time",
                    "image"=>"prom.jpg",
                    "alt"=>"prom",
                    'main_service_id'=>1,
                    'url'=>"empire-limo-nyc",
                    'title'=>"empire limo nyc",
                    "seo_description"=>"empire limo nyc"
                  ],
                //   airport care service
                  [
                    'name'=>"Car service to JFK",
                    'description'=>"Traveling to an airport can be stressful. You would like to ensure that you arrive with enough time to make it to your flight. Then, add the additional stress of going through airport security, due to which you may even reconsider traveling by plane in the first place. If you book with Bright Empire Limousine for Car Service to JFK or any other airport in our list , we will make sure you arrive at your airport of choice in comfort and style, and with plenty of time to spare. Additionally, your entire ride will be stress-free and relaxing.

                    At Bright Empire Limousine, we are always up for the ultimate convenience. We understand how difficult it is to reach on time at JFK airport as it is one of the 10th busiest airports in the U.S. Accordingly, we ensure to get you there and relieve your burden.
                    
                    When it comes to our options for car services to/from JFK, we offer two types of pick-up at the airport.",
                    "image"=>"JFK.jpg",
                    "alt"=>"airport JFK",
                    'main_service_id'=>2,
                    'url'=>"car-service-to-JFK",
                    'title'=>"Car Service to JFK Airport",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
                  ],
                  [
                    'name'=>"Car service to LGA",
                    'description'=>"Traveling to an airport can be stressful. You would like to ensure that you arrive with enough time to make it to your flight. Then, add the additional stress of going through airport security, due to which you may even reconsider traveling by plane in the first place. If you book with Bright Empire Limousine for Car Service to LGA or any other airport in our list , we will make sure you arrive at your airport of choice in comfort and style, and with plenty of time to spare. Additionally, your entire ride will be stress-free and relaxing.

                    At Bright Empire Limousine, we are always up for the ultimate convenience. We understand how difficult it is to reach on time at LGA as it is one of the 10th busiest airports in the U.S. Accordingly, we ensure to get you there and relieve your burden.
                    
                    When it comes to our options for car services to/from LGA, we offer two types of pick-up at the airport.",
                    "image"=>"airport.jpg",
                    "alt"=>"airport",
                    'main_service_id'=>2,
                    'url'=>"car-service-to-LGA",
                    'title'=>"Car Service to LGA Airpor",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
                  ],
                  [
                    'name'=>"Car service to EWR",
                    'description'=>"Traveling to an airport can be stressful. You would like to ensure that you arrive with enough time to make it to your flight. Then, add the additional stress of going through airport security, due to which you may even reconsider traveling by plane in the first place. If you book with Bright Empire Limousine for Car Service to EWR or any other airport in our list , we will make sure you arrive at your airport of choice in comfort and style, and with plenty of time to spare. Additionally, your entire ride will be stress-free and relaxing.

                    At Bright Empire Limousine, we are always up for the ultimate convenience. We understand how difficult it is to reach on time at EWR as it is one of the 10th busiest airports in the U.S. Accordingly, we ensure to get you there and relieve your burden.
                    
                    When it comes to our options for car services to/from EWR, we offer two types of pick-up at the airpor.",
                    "image"=>"ewr.jpg",
                    "alt"=>"airport ewr",
                    'main_service_id'=>2,
                    'url'=>"car-service-to-EWR",
                    'title'=>"Car Service to EWR Airport",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer ny"
                  ],
                  [
                    'name'=>"Car service to TEB",
                    'description'=>"Whether you are arriving at Teterboro to attend a business event or a corporate meeting, you need to arrive on time at the venue. In that case, hiring Bright Empire Limousine is a must. Our Teterboro airport limo service is reliable and safe and you will have some good time during your journey for sure. We have become one of the most prominent airport car service providers by offering convenient and comfortable airport car service to the clients with the best fleet in the market.

                    You can choose a vehicle of your preference from the multi options we offer such as Sedans, SUVs, stretch limos, executive vans or buses.
                    
                    All of our fleet chauffeurs will ensure that you get picked up and dropped off at the airport on time. Furthermore, they also will ensure that you have smooth time during the journey. They are well-versed with all the roads and areas and will ensure that you reach your desired destination on time.",
                    "image"=>"teb.jpg",
                    "alt"=>"airport teb",
                    'main_service_id'=>2,
                    'url'=>"car-service-to-TEB",
                    'title'=>"Car Service to Teterboro Airport",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
                  ],
                  [
                    'name'=>"Car service to HPN",
                    'description'=>"Whether you are arriving at WESTCHESTER to attend a business event or a corporate meeting, you need to arrive on time at the venue. In that case, hiring Bright Empire Limousine is a must. Our WESTCHESTER airport limo service is reliable and safe and you will have some good time during your journey for sure. We have become one of the most prominent airport car service providers by offering convenient and comfortable airport car service to the clients with the best fleet in the market.

                    You can choose a vehicle of your preference from the multi options we offer such as Sedans, SUVs, stretch limos, executive vans or buses.
                    
                    All of our fleet chauffeurs will ensure that you get picked up and dropped off at the airport on time. Furthermore, they also will ensure that you have smooth time during the journey. They are well-versed with all the roads and areas and will ensure that you reach your desired destination on time.
                    
                    en it comes to our options for car services to/from EWR, we offer two types of pick-up at the airport:
                    All of our fleet chauffeurs will ensure that you get picked up and dropped off at the airport on time. Furthermore, they also will ensure that you have smooth time during the journey. They are well-versed with all the roads and areas and will ensure that you reach your desired destination on time.",
                    "image"=>"hpn.jpg",
                    "alt"=>"hpn",
                    'main_service_id'=>2,
                    'url'=>"car-service-to-HPN",
                    'title'=>"Car Service to HPN Airport",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
                  ],

                //   Point To Point Transfer
                  [
                    'name'=>"NYC and Brooklyn",
                    'description'=>"Whether you’re looking for a ride and a view on the East River Ferry. Or a reliable connection between brooklyn and the city or vice versa Bright Empire Limousine got you covered.

                    Our most common pickups/drop-offs include and not limited to:
                    
                    Manhattan 🔄 Brooklyn: Williamsburg, Long Island City, and DUMBO
                    Brooklyn 🔄 Manhattan: The Financial District, Midtown ...etc
                    Manhattan 🔄 the airports: LGA, EWR, TEB, HPN & JFK
                    Brooklyn 🔄 airports: LGA, EWR, TEB, HPN & JFK
                    Customer satisfaction is our utmost concern. Our professional chauffeurs provide you with comfort and safety while they drive you through the busiest city streets or calm countryside roads. You can sit back and relax in our luxurious plush seats without worrying about being disturbed by the outside world.
                    
                    You can hire Bright Empire Limousine service to travel to/from any location of your choice in Brooklyn. During your ride to your place, you can enjoy the luxury of our service that you are looking for.",
                    "image"=>"Brooklyn1.jpg",
                    "alt"=>"Brooklyn1",
                    'main_service_id'=>3,
                    'url'=>"limo-service-between-NYC-and-Brooklyn",
                    'title'=>"car service brooklyn",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
                  ],
                  [
                    'name'=>"NYC and Staten Island",
                    'description'=>"Whether your team is heading out of the city for a trade show or your family is heading towards a small holiday, we will make sure the trip is nothing less than extraordinary.

                    We are covering all of the borough’s major landmarks and routes. From the world-famous Staten Island Ferry to the South Beach Boardwalk, to the Staten Island Zoo; we’ll fulfill all your transportation needs in style. Our Staten Island point-to-point limo service also ensures that you won’t have any trouble finding your way to and from/to any destination on Staten Island.
                    
                    Our professional Limousine drivers are well trained and experienced. They will make sure that you enjoy and have fun as you ride in the limousine around Staten Island. We will take all the worries of looking for parking space and getting lost in Staten Island and the driver will take You from door to door in one of our exotic limousines.",
                    "image"=>"Staten.jpg",
                    "alt"=>"Staten",
                    'main_service_id'=>3,
                    'url'=>"limo-service-between-NYC-and-Staten-Island",
                    'title'=>"Limo Service between NYC and Staten Island",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
                  ],
                  [
                    'name'=>"NYC and The Bronx",
                    'description'=>"There’s plenty to see and do in a vibrant, colorful, and unique borough of The Bronx in New York City. If you’re in the city and wonder what you can visit in this part of town, check out the list below:

                    Yankee Stadium
                    Bronx Zoo –
                    Van Cortlandt Park
                    New York Botanical Garden
                    Pelham Bay Park
                    Wave Hill
                    Edgar Allan Poe Cottage
                    Woodlawn Cemetery
                    Bartow-Pell Mansion Museum
                    City Island
                    Explore Little Italy in The Bronx
                    One of the most interesting neighborhoods for visitors is Little Italy, also known as Belmont or Arthur Avenue. You’ve probably heard of Manhattan’s Little Italy, which you shouldn’t miss if you’ve never been there.
                    
                    In The Bronx, Little Italy is situated on Arthur Avenue and spans roughly four blocks between East 184th and East 187th Streets. Despite being smaller than its Manhattan equivalent, it still has a thriving Italian-American population and is renowned for its genuine Italian restaurants, specialized food stores, and markets. If you are an Italian cuisine lover and want to taste fresh-made mozzarella, pasta, roasted red peppers, or Italian sausage, you need to check out this place. An immense choice of markets, butcher shops, pasta joints, and restaurants owned by generations of Italian families gives the neighborhood a unique small-town character. The area was the birthplace of many notables, including writer Don DeLillo, singer and songwriter Dion DiMucci, and actor Chazz Palminteri.
                    
                    Bright Empire Limousine offers the best and new vehicles that are constantly monitored and serviced.Book your ride with us, and catch a game at the Yankee Stadium with your friends – let us drive while you have fun. Or, if you need chauffeured transport to and from Fordham Train Station, give us a call or make your reservation online.
                    
                    ",
                    "image"=>"Bronx.jpg",
                    "alt"=>"Bronx",
                    'main_service_id'=>3,
                    'url'=>"limo-service-between-NYC-and-The-Bronx",
                    'title'=>"Limo Service between NYC and The Bronx",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
                  ],
                  [
                    'name'=>"NYC and Queens",
                    'description'=>"If you're looking for reliable car service to Citi Field or to the US open. Bright Empire Limousine is the name to remember. Our luxury car service to and from Citi Field takes the stress out of finding a parking space, fighting traffic, and walking for miles to get to the baseball park.

                    Hiring us to take you to Citi Field is a great way for you and your family or friends to get to a Mets game, corporate or special event in Queens! Let our experienced chauffeur provide you with quality car service to your Citi Field destination.",
                    "image"=>"Queens.jpg",
                    "alt"=>"Queens",
                    'main_service_id'=>3,
                    'url'=>"limo-service-between-NYC-and-Queens",
                    'title'=>"Limo Service between NYC and Queens",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
                  ],
                  [
                    'name'=>"Manhattan",
                    'description'=>"Manhattan is known for different things to different people. It is the premier destination for NYC and world’s tourists, and with so much to do and see in this renowned city. with Bright Empire Limousine, you can easily escape yourself in the most diverse places of the city!

                    Hiring Bright Empire Limousine is all you will need to discover the city's nightlife. With its cost-effectiveness and convenience service you and your loved one can explore its nightlife and its historic beauty of attractions.
                    
                    The great way to travel to an airport or to a destination of your choice in The city. During your drive to your place, you can enjoy the luxury of your ride.
                    
                    Providing a professional and experienced limo service in NYC is our job, especially offering a reliable limo service that customers can trust. With our years of excellence in limo services, you can enjoy our incomparable services.",
                    "image"=>"Manhattan.jpg",
                    "alt"=>"Manhattan.jpg",
                    'main_service_id'=>3,
                    'url'=>"limousine-service-in-Manhattan",
                    'title'=>"Limousine Service in Manhattan",
                    "seo_description"=>"new york car service"
                  ],
                //   Book By Area
                  [
                    'name'=>"Niagara Falls and upstate",
                    'description'=>"Bright Empire Limousine Service works towards a single focused mission- complete comfort and customer satisfaction. We have a large fleet of cars, trained and expert chauffeurs, a great team of customer service executives and an easy to use platform to make traveling a delightful experience for all our customers. We have been helping people make the best of their travel plans with our quality and reliable services. We offer sedans, Suvs and limo services at a fair price.

                    Our wide range of cars helps you pick the right one for your exact needs. Whether you are traveling alone or in a group, need extra leg space or luggage space - your needs will be met through and through. Our trained, polite and expert chauffeurs will offer a smooth and comfortable ride and know all the right ways to get you to your destination. All our drivers are licensed and certified and show expertise on the road. Our limousine service NYC to Upstate NY, promises a quick, safe and reliable travel.
                    
                    Our fast and reliable services ensure that you always have a vehicle to move around and get on with your plans. You are free to choose the kind of car and service you want, whether it's a limousine service to Upstate NY from NYC, an airport shuttle or a car service- we offer it all and more! Our fair prices and absolutely well maintained fleet of cars adds to your quality experience with us. We are built upon a foundation of quality and customer satisfaction and go beyond our way to ensure a smooth and delightful customer experience. Come, experience luxury!
                    
                    ",
                    "image"=>"Niagara.jpg",
                    "alt"=>"Niagara",
                    'main_service_id'=>4,
                    'url'=>"limousine-service-to-niagara-falls-and-upstate",
                    'title'=>"Limousine Service to Niagara Falls and upstate",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
                  ],
                
                  [
                    'name'=>"Washington DC",
                    'description'=>"there you’re planning to visit Washington DC for sightseeing or business purposes, our luxurious limousine service will provide you with the ultimate convenience. From airport transportation to exploring the city, enjoy absolute privacy and comfort every step of your ride. Using our limousine service to Washington DC is a great way to enjoy getaway moments with your family. If you’re traveling with children, you can choose specific special services offered on our website. Special child car seats will protect your little ones, offering you a stress-free ride. Additionally, your children will be seated in comfort and safety throughout your journey.

                    Aside from providing you with a secure ride to and from any location, our limousine service in Washington DC will help you explore the state without facing any hassles or inconveniences. Be it airport transportation or wedding services; our professionally chauffeured services will make a great difference for those who seek quality and reliability
                    
                    All of our chauffeurs are professionally trained to deliver you a smooth ride until you reach your destination. Rest assured that you’ll receive complete satisfaction for your money spent.",
                    "image"=>"Washington.jpg",
                    "alt"=>"Washington.jpg",
                    'main_service_id'=>4,
                    'url'=>"limousine-service-to-washington-DC",
                    'title'=>"Limousine Service to Washington DC",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
                  ],
                  [
                    'name'=>"Boston",
                    'description'=>"n Bright Empire Limousine we offer car and limo services between Boston and New York.

                    Our service to Boston includes a variety of different models of cars. Each one is fully equipped with all the amenities and technologies that you would expect from a luxury vehicle. Our fleet of cars includes newer vehicles with modern features.
                    
                    Our NY to Boston limo service is ideal for those who want to make an impression on their clients or colleagues. These black cars have everything you need for an upscale evening out.
                    
                    We provide executive limos for corporate executives, diplomats, and other high-powered individuals. It’s for those who need a luxurious ride on their way out of town or back from an appointment in Boston.",
                    "image"=>"Boston.jpg",
                    "alt"=>"Boston",
                    'main_service_id'=>4,
                    'url'=>"limousine-service-to-boston",
                    'title'=>"Limousine Service to Boston",
                    "seo_description"=>"Luxurious. Comfortable. limousine service in New York. An exceptional experience in your journey with luxury car service nyc, limo service nyc and airport transfer nyc"
                  ]
        ];

        foreach($services as $service){


            DB::transaction(function () use ($service) {
                $res = Service::create([
                    'name' => $service['name'],
                    'description' => $service['description'],
                    'main_service_id' => $service['main_service_id']
                ]);
                $res->image()->create([
                    'name' =>$service['image'],
                    'alt' => $service['alt']
                ]);

                $res->seo()->create([
                    'title' => $service['title'],
                    'description' => $service['seo_description'],
                    'url' => 'services/'.$service['url'],
                ]);
            });
        }
    }
}
