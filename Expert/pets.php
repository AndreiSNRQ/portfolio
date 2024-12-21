<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurryConnect</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawsome/css/all.min.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="../navPHP/home.css">
    <link rel="icon" href="../navPHP/Icons/Main_Logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<style>
    ::-webkit-scrollbar {
    width: 5px;
}

::-webkit-scrollbar-thumb {
    background-color: #22ff43cf;
    border-radius: 10px;
    border: 1px solid #cfe2ff85;
}

::-webkit-scrollbar-track {
    background: transparent;
}

</style>
<body>  
    <!-- navbar header -->
  <?php include '../navPHP/template.php'?>

    <!-- main content -->
    <div class="container mt-4">
        <table id="documentsTable" class="table table-striped table-bordered mx-auto custom-table">
            <thead class="table-success" style="font-size: 14px;">
                <tr>
                    <th class="text-nowrap">Pet Breed</th>
                    <th class="text-nowrap">Pet Type</th>
                    <th class="text-nowrap">Size</th>
                    <th class="text-nowrap">Color</th>
                    <th class="text-nowrap">Life Span</th>
                    <th class="text-nowrap">Origin</th>
                    <th class="text-nowrap">Roles/Responsibilities</th>

                </tr>
            </thead>
                <tbody>
                        <tr>
                            <td class="text-nowrap"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAREsfs_iq3FcjXtvfEYSnCp4JV2NqLOBsdidHsF9yxnZlGvmHMzud3_UiBqsWTqmym6c&usqp=CAU" alt="">&nbsp;Golden Retriever</td>
                            <td>Dog</td>
                            <td class="text-nowrap">Medium to Large</td>
                            <td>Golden, Cream, Light Golden</td>
                            <td class="text-nowrap">10–12 years</td>
                            <td>United Kingdom</td>
                            <td>Companion, Therapy Dog, Service Dog, Search & Rescue</td>
                        </tr>

                        <tr>
                            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQ-Y6luYLn_s61PHE5ZPbhcH2pD7PEKSgmU3hYh2NU13sSCldOZrudI8qhKwPdzmK_sZU&usqp=CAU" alt="">&nbsp;German Shepherd</td>
                            <td>Dog</td>
                            <td>Large</td>
                            <td>Black and Tan, Sable, Solid Black</td>
                            <td>9–13 years</td>
                            <td>Germany</td>
                            <td>Working Dog, Police Dog, Service Dog, Herding</td>
                        </tr>

                        <tr>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Cute_beagle_puppy_lilly.jpg/1280px-Cute_beagle_puppy_lilly.jpg" alt="">&nbsp;Beagle</td>
                            <td>Dog</td>
                            <td>Small to Meduim</td>
                            <td>Tri-color (Black, White, and Brown), Lemon (Light Tan and White), Red and White</td>
                            <td>12–15 years</td>
                            <td>United Kingdom</td>
                            <td>Companion, Hunting, Detection</td>
                        </tr>

                        <tr>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/d/d4/Labrador_Retriever_-_Yellow.JPG" alt="">&nbsp;Labrador Retriever</td>
                            <td>Dog</td>
                            <td>Medium to Large</td>
                            <td>Yellow, Black, Chocolate</td>
                            <td>10–12 years</td>
                            <td>Canada (Newfoundland)</td>
                            <td>Companion, Service Dog, Hunting, Search & Rescue</td>
                        </tr>

                        <tr>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/1/12/Luna_The_French_Bulldog_%2889304505%29.jpeg" alt="">&nbsp;French Bulldog</td>
                            <td>Dog</td>
                            <td>Small</td>
                            <td>Fawn, Brindle, Pied, White, Black</td>
                            <td>10–12 years</td>
                            <td>France</td>
                            <td>Companion, Watchdog</td>
                        </tr>

                        <tr>
                            <td><img src="https://images.squarespace-cdn.com/content/v1/643df52d3954705bf4edf003/016622fa-0a7f-40eb-905c-cb81de25f98c/chihuahua-dog-portrait-pink-background.jpeg" alt="">&nbsp;Chihuahua</td>
                            <td>Dog</td>
                            <td>Small</td>
                            <td>Various (Fawn, Black, White, Brown, Cream)</td>
                            <td>12–20 years</td>
                            <td>Mexico</td>
                            <td>Companion, Watchdog</td>
                        </tr>

                        <tr>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/4/43/Year_Old_Rottweiler.jpg" alt="">&nbsp;Rottweiler</td>
                            <td>Dog</td>
                            <td>Large</td>
                            <td>Black and Tan</td>
                            <td>8–10 years</td>
                            <td>Germany</td>
                            <td>Guard Dog, Working Dog, Therapy Dog</td>
                        </tr>

                        <tr>
                            <td><img src="https://images.squarespace-cdn.com/content/v1/5bd61059ca525b5f9899b0a8/1722284838974-RC53J2GDQQJRI3EZCBLV/IMG_9820.jpeg" alt="">&nbsp;Poodle (Standard)</td>
                            <td>Dog</td>
                            <td>Medium to Large</td>
                            <td>White, Black, Brown, Apricot, Cream</td>
                            <td>12–15 years</td>
                            <td>Germany (commonly associated with France)</td>
                            <td>Companion, Service Dog, Therapy Dog, Working Dog</td>
                        </tr>

                        <tr>
                            <td><img src="https://t3.ftcdn.net/jpg/01/00/80/08/360_F_100800827_RbUfH5xgkYCj8GKMaPi4d9laRo1rRGEi.jpg" alt="">&nbsp;Siberian Husky</td>
                            <td>Dog</td>
                            <td>Medium</td>
                            <td>Black, Grey, Red, White</td>
                            <td>12–15 years</td>
                            <td>Siberia (Russia)</td>
                            <td>Sled Dog, Working Dog, Companion</td>
                        </tr>

                          <!-- Cat Data -->
                        <tr>
                            <td><img src="https://images.pexels.com/photos/1644767/pexels-photo-1644767.jpeg?cs=srgb&dl=pexels-carocastilla-1644767.jpg&fm=jpg" alt="">&nbsp;Persian Cat</td>
                            <td>Cat</td>
                            <td>Medium</td>
                            <td>Various (White, Black, Blue, Cream, Tabby, etc.)</td>
                            <td>12–17 years</td>
                            <td>Iran (Persia)</td>
                            <td>Companion</td>
                        </tr>

                        <tr>
                            <td><img src="https://media.istockphoto.com/id/176697468/photo/view-siamese-cat.jpg?s=612x612&w=0&k=20&c=DpbQPqJAZKvwFPr8_iQm1CvNQ_6UeIlzHKqL3wsx3aA=" alt="">&nbsp;Siamese Cat</td>
                            <td>Cat</td>
                            <td>Medium</td>
                            <td>Seal Point, Blue Point, Chocolate Point, Lilac Point</td>
                            <td>12–20 years</td>
                            <td>Thailand</td>
                            <td>Companion</td>
                        </tr>

                        <tr>
                            <td><img src="https://media.istockphoto.com/id/1031592516/photo/maine-coon-cat-on-white-background.jpg?s=612x612&w=0&k=20&c=EZUIWLeUD31TKbgeVwcxh_z4q0ADXjvssqQA4zCoEx4=" alt="">&nbsp;Maine Coon Cat</td>
                            <td>Cat</td>
                            <td>Large</td>
                            <td>Various (Tabby, Brown Tabby, Black, Cream)</td>
                            <td>12–15 years</td>
                            <td>United States</td>
                            <td>Companion, Hunting, Therapy</td>
                        </tr>

                        <tr>
                            <td><img src="https://media.istockphoto.com/id/1276717883/photo/bengal-cat-at-home.jpg?s=612x612&w=0&k=20&c=ObFfo1TOc1iyZhbU6b-j1p4u5l1x6NpKwHIaczu3usA=" alt="">&nbsp;Bengal Cat</td>
                            <td>Cat</td>
                            <td>Medium to Large</td>
                            <td>Spotted, Marbled (Gold, Orange, Brown, Silver)</td>
                            <td>12–16 years</td>
                            <td>United States (crossbred with wild Asian leopard cat)</td>
                            <td>Companion, Active, Playful</td>
                        </tr>

                        <tr>
                            <td><img src="https://media.istockphoto.com/id/147316567/photo/young-abyssinian-cat-in-action.jpg?s=612x612&w=0&k=20&c=rsTWNwhh-g28rff4Mq0K-sfJ9lNhGXHRNbt-co8UYKc=" alt="">&nbsp;Abyssinian Cat</td>
                            <td>Cat</td>
                            <td>Medium</td>
                            <td>Ruddy, Red, Blue, Fawn</td>
                            <td>14–16 years</td>
                            <td>Ethiopia</td>
                            <td>Companion, Active, Curious</td>
                        </tr>

                        <tr>
                            <td><img src="https://images.pexels.com/photos/991831/pexels-photo-991831.jpeg?cs=srgb&dl=pexels-366671-991831.jpg&fm=jpg" alt="">&nbsp;Sphynx Cat</td>
                            <td>Cat</td>
                            <td>Medium</td>
                            <td>Hairless (may have skin colors like Pink, Black, White)</td>
                            <td>12–16 years</td>
                            <td>Canada</td>
                            <td>Companion, Affectionate, Energetic</td>
                        </tr>

                        <tr>
                            <td><img src="https://t3.ftcdn.net/jpg/01/67/28/68/360_F_167286894_c2rawDIuLFRu154mpIssuSM507OanujG.jpg" alt="">&nbsp;Ragdoll Cat</td>
                            <td>Cat</td>
                            <td>Large</td>
                            <td>Blue, Seal, Chocolate, Lilac, Red, Cream</td>
                            <td>12–15 years</td>
                            <td>United States</td>
                            <td>Companion, Lap Cat, Laid-back</td>
                        </tr>

                        <tr>
                            <td><img src="https://img.freepik.com/premium-photo/closeup-portrait-grey-british-shorthair-cat-with-orange-eyes_946209-17562.jpg" alt="">&nbsp;British Shorthair</td>
                            <td>Cat</td>
                            <td>Medium to Large</td>
                            <td>Blue</td>
                            <td>12–20 years</td>
                            <td>United Kingdom</td>
                            <td>Companion</td>
                        </tr>

                        <tr>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Savannah_Cat_portrait.jpg/682px-Savannah_Cat_portrait.jpg" alt="">&nbsp;Savannah Cat</td>
                            <td>Cat</td>
                            <td>Large</td>
                            <td>Spotted (Brown, Silver, Black)</td>
                            <td>12–20 years</td>
                            <td>United States (crossbred with wild African serval)</td>
                            <td>Companion, Active, Adventurous</td>
                        </tr>

                        <tr>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/9/9b/Manx_cat_by_Karen_Weaver.jpg" alt="">&nbsp;Manx Cat</td>
                            <td>Cat</td>
                            <td>Medium</td>
                            <td>Various (Solid, Tabby, Bicolor)</td>
                            <td>9–13 years</td>
                            <td>Isle of Man</td>
                            <td>Companion, Intelligent, Playful</td>
                        </tr>

                        <tr>
                            <td><img src="https://truespiritanimal.com/wp-content/uploads/2023/12/syrian-hamster-symbolism-and-meaning-2ee33add-768x461.webp" alt="">&nbsp;Syrian Hamster</td>
                            <td>Dwarf</td>
                            <td>5–7 inches</td>
                            <td>Golden, Black, Cream, White, Chocolate, and variations</td>
                            <td>2–3 years</td>
                            <td>Syria</td>
                            <td>Pet, Companion, Small Animal Care</td>
                        </tr>

                        <tr>
                            <td><img src="https://www.joelsartore.com/wp-content/uploads/stock/ANI012/ANI012-00214.jpg" alt="">&nbsp;Dwarf Campbell's Russian Hamster</td>
                            <td>Dwarf</td>
                            <td>3–4 inches</td>
                            <td>Gray, Agouti, Black, and White</td>
                            <td>1.5–2 years</td>
                            <td>Central Asia, Russia</td>
                            <td>Pet, Companion, Small Animal Care</td>
                        </tr>

                        <tr>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/8/86/Chinese_Hamster.jpg" alt="">&nbsp;Chinese Hamster</td>
                            <td>Dwarf</td>
                            <td>4–5 inches</td>
                            <td>Agouti, Gray, White, Black</td>
                            <td>2–3 years</td>
                            <td>Northern China, Mongolia</td>
                            <td>Pet, Companion, Small Animal Care</td>
                        </tr>

                        <tr>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Pearl_Winter_White_Russian_Dwarf_Hamster_-_Front.jpg/1024px-Pearl_Winter_White_Russian_Dwarf_Hamster_-_Front.jpg" alt="">&nbsp;Winter White Russian Dwarf Hamster</td>
                            <td>Dwarf</td>
                            <td>3–4 inches</td>
                            <td>Winter White, Gray, White</td>
                            <td>1.5–2.5 years</td>
                            <td>Siberia, Kazakhstan</td>
                            <td>Pet, Companion, Small Animal Care</td>
                        </tr>

                        <tr>
                            <td><img src="https://img.freepik.com/premium-photo/teddy-bear-hamster-cute-small-pet-with-round-body-cuddly-fur-twitching-nose-concept-pet-care-small-animals-hamsters-teddy-bear-hamster-cute-pets_918839-146963.jpg" alt="">&nbsp;Teddy Bear Hamster</td>
                            <td>Syrian</td>
                            <td>5–7 inches</td>
                            <td>Golden, Cream, Black, White</td>
                            <td>2–3 years</td>
                            <td>United States (a fluffy variation of the Syrian hamster)</td>
                            <td>Pet, Companion</td>
                        </tr>

                        <tr>
                            <td><img src="https://i.pinimg.com/736x/19/2b/4e/192b4e6363890cea85c5972efca71ca7.jpg" alt="">&nbsp;Betta Fish <p class="text-muted">(Siamese Fighting Fish)</p></td>
                            <td>Freshwater Fish</td>
                            <td>2.5–3 inches</td>
                            <td>Blue, Red, White, Purple, Green, Multicolored</td>
                            <td>3–5 years</td>
                            <td>Southeast Asia (Thailand, Cambodia, Vietnam)</td>
                            <td>Ornamental, Display, Aggressive (male), Companion</td>
                        </tr>

                        <tr>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Paracheirodon_innesi_neon_tetra.jpg/1200px-Paracheirodon_innesi_neon_tetra.jpg" alt="">&nbsp;Neon Tetra</td>
                            <td>Freshwater Fish</td>
                            <td>Up to 1.5 inches (3.8 cm)</td>
                            <td>Bright blue body with a red stripe5-10 years</td>
                            <td>5-10 years</td>
                            <td>South America (Amazon Basin, Brazil, Colombia, Peru)</td>
                            <td>Community tank favorite, adds color and vibrancy, peaceful schooling behavior</td>
                        </tr>

                        <tr>
                            <td><img src="https://www.aquariumofpacific.org/images/made_new/images-uploads-clownfish_400_q85.jpg" alt="">&nbsp;Clownfish</td>
                            <td>Saltwater Fish</td>
                            <td>3-4 inches (7.5-10 cm)</td>
                            <td>Orange with white bands bordered by black</td>
                            <td>6-10 years (up to 20 in captivity)</td>
                            <td>Indo-Pacific (coral reefs near Australia, Southeast Asia)</td>
                            <td>Famous for symbiosis with sea anemones, widely recognized due to their portrayal in media</td>
                        </tr>

                        <tr>
                            <td><img src="https://images.unsplash.com/photo-1517361265-3bd77c6f1689?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8a29pJTIwZmlzaHxlbnwwfHwwfHx8MA%3D%3D" alt="">&nbsp;Koi Fish</td>
                            <td>Freshwater Fish</td>
                            <td>24-36 inches (60-90 cm)</td>
                            <td>Multi-colored patterns including white, orange, black, yellow, red, and blue</td>
                            <td>25-35 years (some can live over 50 years)</td>
                            <td>East Asia (China, Japan)</td>
                            <td>Ornamental pond fish, symbols of good fortune and perseverance in Japanese culture</td>
                        </tr>

                        <tr>
                            <td><img src="https://seatechaquariums.com/wp-content/uploads/2018/12/Oscar-Fish-_-140234199.jpeg" alt="">&nbsp;Oscar Fish</td>
                            <td>Freshwater Fish</td>
                            <td>12-16 inches (30-40 cm)</td>
                            <td>Typically dark with orange-red markings; various morphs include albino, tiger, and lutino</td>
                            <td>10-20 years</td>
                            <td>South America (Amazon Basin, Orinoco River)</td>
                            <td>Popular in large aquariums, valued for their intelligence, personality, and ability to recognize their owners </td>
                        </tr>

                </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#documentsTable').DataTable();
        });
    </script>

</body>
</html>