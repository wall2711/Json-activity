
<?php
    header('Access-Control-Allow-Origin: *');
    // root
    $mountain = [
        [   
            "img" => "everest.jpg",
            "name" => "MT. Everest",
            "height" => "8,849 m",
            "climber" => "Hillary and Sherpa mountaineer Tenzing Norgay",
            "history" => "Mount Everest is the highest mountain on Earth, located in the Himalayas on the border between Nepal and Tibet. The first successful ascent of Mount Everest was achieved by Sir Edmund Hillary of New Zealand and Tenzing Norgay, a Sherpa of Nepal, on May 29, 1953.",
            "sbpeak" => ["Lhotse, Nuptse ,Changtse"]
        ],
        [
            "img" => "k2.jpg",
            "name" => "MT. K2",
            "height" => "8611 m",
            "climber" => "Lino Lacedelli and Achille Compagnoni",
            "history" => "K2 is the second-highest mountain on Earth, located in the Karakoram Range on the border between Pakistan and China. The first successful ascent of K2 was achieved by an Italian expedition in 1954. Since then, many climbers have attempted to climb K2, but it remains one of the most challenging and dangerous mountains in the world with a high fatality rate.",
            "sbpeak" => ["Chogori","Lhotse","Nuptse"]
        ],
        [
            "img" => "Kangchenjunga.jpg",
            "name" => "MT. Kangchenjunga",
            "height" => "8,586 m",
            "climber" => "Joe Brown and George Band",
            "history" => "Kangchenjunga is the third-highest mountain on Earth, located on the border between Nepal and India. The first successful ascent of Kangchenjunga was achieved by a British expedition in 1955. It is considered one of the most difficult and dangerous mountains to climb, and only a few hundred people have successfully reached its summit.",
            "sbpeak" => ["Kangchenjunga West","Kangchenjunga Central","Kangchenjunga South"]
        ],
        [
            "img" => "Makalu.jpg",
            "name" => "MT. Makalu",
            "height" => "8,485 m",
            "climber" => "Lionel Terray and Jean Couzy",
            "history" => "Makalu is the fifth-highest mountain on Earth, located in the Mahalangur Himalayas on the border between Nepal and Tibet. The first successful ascent of Makalu was achieved by a French expedition in 1955. It is known for its steep slopes and difficult climbing routes, making it one of the most challenging mountains to climb.",
            "sbpeak" => ["Kangchungtse","Chamlang","Baruntse"]
        ],
        [
            "img" => "Cho Oyu.jpg",
            "name" => "MT. Cho Oyu",
            "height" => "8,188 m",
            "climber" => "Herbet Tichy, Joseph Jochler and Pasang Dawa Lama",
            "history" => "Cho Oyu is the sixth-highest mountain on Earth, located in the Himalayas on the border between Nepal and Tibet. The first successful ascent of Cho Oyu was achieved by an Austrian expedition in 1954. It is considered one of the easier 8,000-meter peaks to climb, with relatively less technical climbing and a lower fatality rate.",
            "sbpeak" => ["Nangpai Gosum","Lhakpa Ri","Sharpu"]
        ]

    ];

    $data = json_encode($mountain);
    echo $data;
    
?>
