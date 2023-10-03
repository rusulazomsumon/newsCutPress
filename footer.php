
    <!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="col-12 text-center">
            <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i> সাতক্ষীরা, খুলনা, বাংলাদেশ </p>
            <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
            <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>news@doiniksongbadchitro.com</p>
        </div>
    </div>
    <div class="container-fluid px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <?php     echo date('Y'); ?> | <a href="#"><?php bloginfo('name');?> </a>. All Rights Reserved. 
		
		<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
		| Design & Developed by <a href="https://rusulazom.me">Rusul Azom</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


   
    <!-- for showing wp admint ber in the top -->
    <?php wp_footer(); ?>


    <!-- Bangla date time -->

    <script>

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

// Get the current time
const date = new Date();

// Get the hours, minutes, and seconds
const hours = date.getHours();
const minutes = date.getMinutes();
const seconds = date.getSeconds();

// Convert the hours to 12-hour format
const hours12 = hours % 12 || 12;

// Add a leading zero to the hours and minutes if necessary
const hoursString = hours12 < 10 ? `০${hours12}` : hours12;
const minutesString = minutes < 10 ? `0${minutes}` : minutes;

// Add the AM/PM suffix
const ampm = hours >= 12 ? 'অপরাহ্ন' : 'পূর্বাহ্ন';

// Return the formatted time string
const banglaTime = `${hoursString}:${minutesString} ${ampm}`
  .replace('0', '০')
  .replace('1', '১')
  .replace('2', '২')
  .replace('3', '৩')
  .replace('4', '৪')
  .replace('5', '৫')
  .replace('6', '৬')
  .replace('7', '৭')
  .replace('8', '৮')
  .replace('9', '৯');

// Display the Bangla day name, date, and time
const banglaDateTimeElement = document.getElementById("banglaDateTime");
banglaDateTimeElement.textContent = ' আজঃ ' +formattedDate+ ' | ' + banglaTime + ' ';

// Update the BanglaDateTimeElement every second
// setInterval(() => {
//   banglaDateTimeElement.textContent = ' আজঃ ' +formattedDate+ ' | ' + banglaTime + ' ';
// }, 1000);

    </script>

    <!-- Bootstrap JS and jQuery (optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>