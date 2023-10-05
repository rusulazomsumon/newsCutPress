
    <!-- Footer Start -->
    <footer class="text-white mt-3" style="background-color: #F32A41! important;">
      <!-- row 1, 3 column -->
      <div class="container text-white pt-3">
        <div class="row">
          <div class="col-md-4">
            <?php dynamic_sidebar('footer-widget-1'); ?>
          </div>
          <div class="col-md-4">
            <?php dynamic_sidebar('footer-widget-2'); ?>
          </div>
          <div class="col-md-4">
            <?php dynamic_sidebar('footer-widget-3'); ?>
          </div>
        </div>
      </div>
      <!-- Row 2, 1 col -->
      <div class="container text-white pt-3">
        <div class="row">
          <div class="col-md-12">
            <?php dynamic_sidebar('footer-widget-4'); ?>
          </div>
        </div>
      </div>
      <!-- Row 3, 1 col #copyright area-->
      <div class="container-flued text-white mt-3" style="background-color: #006A4E !important;">
        <div class="row">
          <div class="col-md-12">
            <!-- <?php dynamic_sidebar('copyright'); ?> -->
            <p class="m-0 text-center">&copy; <?php     echo date('Y'); ?> - <a href="#"><?php bloginfo('name');?> </a>. All Rights Reserved. |  ডেভলপার & ডিজাইনার <a href="https://www.rusulazom.me" target="_blank" >Rusul Azom Sumon</a> </p>
          </div>
        </div>
      </div>
    </footer>

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