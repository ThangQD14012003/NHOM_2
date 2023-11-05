<!--Câu 1 -->
<?php
echo strlen('Hoàng Thị Minh Giang');
echo '<br>';
?>

<!-- Câu 2 -->
<?php
echo str_word_count('Hoang Thi Minh Giang');
echo '<br>';
?>  

<!-- Câu 3 -->
<?php
echo strrev('Hoang Thi Minh Giang');
echo '<br>';
?>

<!-- Câu 4 -->
<?php
echo strpos('Hoàng Thị Minh Giang','Giang');
echo '<br>';
?>

<!-- Câu 5: Thay thế Linh -> Minh -->
<?php
echo str_replace('Linh','Minh','Hoàng Thị Linh Giang');
echo '<br>';
?>