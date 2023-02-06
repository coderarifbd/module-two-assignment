<?php
    /**
     * 25% commission for above 20,000 tution fee;
     * 20% commission for 10,000 and lessthan 20,000;
     * 15% commission for 7,000 and lessthan 10,000;
     * If the tuition fee is below seven thousand dollars the data will be invalid.
     */

$tutionFee = 8000;

$commission = ((20000 <= $tutionFee) ? "Congratulations You get 25% commission" : (20000 > $tutionFee) && (10000 <= $tutionFee)) ? "Congratulations You get 20% commission" : ((10000 > $tutionFee) && (7000 <= $tutionFee)?"Congratulations You get 15% commission":"invalid data");
echo $commission;
