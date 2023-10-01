<?php 
    /* 
        Template Name: NewsPress 2
        Template Post Type: post, page
    */ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.1/html2canvas.min.js"></script>
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.3.2/dist/html2canvas.min.js"></script>
    <style>
        /* ########Old Css########## */
        body{
        margin: 50px;
        font-family: "My Custom Font", sans-serif;
        color:#292929;
        background-color: #FFFFFF; 
        font-family: 'SolaimanLipi', Arial, sans-serif !important;
        /* font-family: 'kalpurush', Arial, sans-serif !important; */
        }
        .english {
            font-family: 'Courier New', Courier, monospace;
        }
        /* header area */
        .header {
            display: flex;
        }

        .image-section {
            flex: 1;
        }
        .image-section img{
            height: 150px;
            padding: 0px 100px 0px 100px;
        }

        /* promotional */

        .promotional {
            margin-top: 10px;
            text-align: center;
            background-color: #F42A40;
            }
            
            .promotional .tagline p{
            padding: 1px;
            /* font-family: 'SolaimanLipi', Arial, sans-serif !important; */
            color: white;
            font-size: 24px;
            font-weight: 500;
            }

        /* navigation area */
        .nav-area{
            margin-top: 10px;
            text-align: center;
            background-color: #F9F0E2;
            display: flex;  
            justify-content: space-between;
        }

        .nav-area p{
            padding: 2px;
            font-weight: 500;
            text-decoration: none;
            font-size: 16px;
        }


        /* footer area  */
        .copyright {
           padding: 0px 100px 0px 100px;       
        }
        .copyright p {
            font-size: 22px;
            font-weight: 500;
            text-align: center;
        }
        .source{
            font-size: 24px;
            font-weight: 600;
            font-style: italic;
        }
        /* old css end */

        /* Custom CSS for newspaper-like view */
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Main Content of Blog */
        /* Define a two-column layout for content */
        .multi-column {
            column-count: 2;
            column-gap: 20px;
        }

        .multi-column p {
            text-align: justify;
            font-size: 22px;
            margin-bottom: 15px;
            line-height: 1.5;
        }
        /* content images */
        .multi-column img{
            height: auto !important;
            width: 100% !important;
        }
        /* post title area */
        .postTitleArea {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        /* thumnails */
            .postTitleArea img {
            margin: 0;
            }
        /* title */
            .postTitleArea .postTitle {
            margin: 0;
            /* font-family: 'SolaimanLipi', Arial, sans-serif !important; */
            text-align: center;
            font-weight: 900; 
            margin: 10px 0pc 20px 0px;
        }
        
        
    </style>
</head>
<body>
<div class="print-area">
        <div class="header">
            <!-- <div class="image-section">
              <img src="./img/imageskjk.jpg" alt="Image 1">
            </div> -->
            <div class="image-section">
              <img style="width: 100%;" src="https://doiniksongbadchitro.com/wp-content/uploads/2023/08/WhatsApp_Image_2023-08-01_at_13.02.00-removebg-preview.png" alt="Image 2">
            </div>
            <!-- <div class="image-section">
              <img  style=" margin-left: 150px;" src="./img/mujib100.png" alt="Image 3">
            </div> -->
        </div>

        <div class="promotional ">
            <span class="tagline"><p id="banglaDateTime"> </p> </span>
        </div>
        
    <!-- feture links -->
        <!-- <div class="nav-area english">
            <p>www.doiniksongbadchitro.com</p>
            <p>www.fb.com/doiniksongbadchitro</p>
            <p>info@doiniksongbadchitro.com</p>
        </div> -->
    <!-- News Content Area -->
    <div class="container">
        <div class="row">
            <div class="postTitleArea col-md-12">
                <h1 class="postTitle"><?php the_title(); ?></h1> <br>
                <!-- <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Thumbnail" style="margin-left: auto; margin-right: auto;"> -->
                <!-- Display the post title -->
            </div>
            <div class="col-md-12">                
                <!-- Display the post content in multiple columns -->
                <div class="multi-column">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- News Content Area End -->

    <!-- Rest of Body Old Code -->
    <div class="copyright">
        <hr>
            <!-- <img src="https://doiniksongbadchitro.com/wp-content/uploads/2023/07/doinik-songbadchitro-sangbadik-niyog.jpg" alt="" width="100%"> -->
            <p class="author">  <span class=""> সম্পাদকঃমাহমুদুল হাসান মাহমুদ  সহ সম্পাদকঃ  মোঃ সোহাগ শেখ  (01686844527) | সহ সম্পাদক ও প্রকাশকঃ  মোঃ সৌরভ শেখ (01614949395)</p>
            <p class="author">  <span class="">প্রধান কার্যালয়ঃ চিতলমারী, বাগেরহাট, খুলনা </p>
            <p class="copy">  <span class="english">&copy;</span> ২০২৩ - দৈনিক সংবাদ চিত্র </p>
            
          </div>
    
        <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@FooterArea@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

    </div>
    
   
    <!-- <button id="screenshot-btn">@</button> -->
    <!-- <p class="myAdd">মাত্র <b> ২২২২ টাকায় </b> যে কোন ওয়েবসাইট বানাতে, যোগাযোগঃ ০১৮৮২৮৩৪০৭১</p> -->

    <script>
        // if double click on body ,then this action will run
        document.body.addEventListener('dblclick', function() {
        html2canvas(document.body).then(function(canvas) {
        // Create a temporary link
        var link = document.createElement('a');
        link.href = canvas.toDataURL();

        link.download = 'সংবাদচিত্র_newsCutting_' + getCurrentTime() + '.png';

        // Function to get current time as minutes and seconds
        function getCurrentTime() {
            var currentDate = new Date();
            var minutes = currentDate.getMinutes().toString().padStart(2, '0');
            var seconds = currentDate.getSeconds().toString().padStart(2, '0');
            return minutes + ':' + seconds;
        }

            // Trigger the download
            link.click();
        });
        });

        // @@@@@@@@@@@BanglaDate@@@@@@@@@@@@@@
        // Array of Bangla day names
        const banglaDayNames = [
            "রবিবার", "সোমবার", "মঙ্গলবার", "বুধবার",
            "বৃহস্পতিবার", "শুক্রবার", "শনিবার"
        ];

        // Get the current date
        const currentDate = new Date();

        // Set the options for Bengali calendar
        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            calendar: 'beng',
            numberingSystem: 'beng'
        };

        // Format the date in the Bengali calendar
        const formatter = new Intl.DateTimeFormat('bn-BD', options);
        const formattedDate = formatter.format(currentDate);

        // Get the day index (0-6)
        const dayIndex = currentDate.getDay();

        // Get the corresponding Bangla day name
        const banglaDayName = banglaDayNames[dayIndex];

        // Display the Bangla day name and date
        const banglaDateTimeElement = document.getElementById("banglaDateTime");
        banglaDateTimeElement.textContent = ' প্রকাশের সময়ঃ ' +formattedDate+ ' | বর্ষঃ ১, পৃষ্ঠাঃ ১২,  | ই-পেপার ভার্সন | মূল্যঃ ফ্রি  ';

    </script>

    <!-- Bootstrap JS and jQuery (optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
