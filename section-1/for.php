    <!-- Write a funtction to find the prime number in php? -->
    <?php
    function isPrime($number): bool
    {
        $result = true;

        if ($number == 1)
            $result = false;

        for ($i = 2; $i <= $number / 2; $i++) {
            if ($number % $i == 0) $result = false;
        }

        return $result;
    }

    $number = 11;
    echo isPrime($number) ? "$number is Prime" : "$number is not Prime";
    ?>