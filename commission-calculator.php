
<?php
    /**
     * 25% commission for above 20,000 tution fee;
     * 20% commission if tution fee more than 10,000 and lessthan 20,000;
     * 15% commission if tution fee more than 7,000 and lessthan 10,000;
     * If the tuition fee is below seven thousand dollars the data will be invalid.
     */

$tutionFee = 19000;

$commission = (20000 <= $tutionFee) ? "Congratulations You get 25% commission" : ((20000 > $tutionFee) && (10000 <= $tutionFee) ? "Congratulations You get 20% commission" : ((10000 > $tutionFee) && (7000 <= $tutionFee)?"Congratulations You get 15% commission":"Invalid data"));
echo $commission;
