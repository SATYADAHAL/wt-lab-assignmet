![Screenshot](https://user-images.githubusercontent.com/51309409/179974480-745b93c7-8de7-48b7-a751-67be676430c3.png)

 # Sorting Arrays
 ### Sorting is to arrange the elements of an array in a particular order. PHP performs sorting on normal arrays like a numeric array and on associative arrays. Normal arrays like numeric arrays can be sorted by using the simple sort() function, and to perform the sorting on the associative array, we have different functions.

### The sorting can be done in ascending or descending order, alphabetical or numerical order, natural way, random and also user-defined order. Sorting on arrays makes your search easier as the data elements are in sorted form which is easier to locate.

---

# How Is Sorting Performed in PHP ?
### Sorting is performed in php using variety of sort functions.
### some of them are:

## 1) sort()
### sort() function is used for sorting indexed arrays. It is used for sorting the elements of the indexed array in ascending order.
### Syntax:
`sort($variable);`
### Example :
```PHP
<?php
$numbers= array(2,9,6,8);
sort($numbers);
echo($numbers);
?>
```
## 2) rsort()
### rsort() function is also used for sorting indexed arrays. It is used for sorting the elements of the indexed array in descending order.
### Syntax:
`rsort($variable);`
### Example :
```PHP
<?php
$numbers= array(2,9,6,8);
rsort($numbers);
echo($numbers);
?>
```
## 3) asort()
### asort() function is used for sorting associative arrays. It is used for sorting the elements of the associative array in ascending order according to the value. It works just like sort(), but it preserves the association between keys and its values while sorting.
### Synatx:
`asort($variable);`
### Example :
```PHP
<?php
$rollno= array("ash"=>1,"xyz"=>34);
asort($rollno);
echo($rollno);
?>
```

## 4) arsort()
### arsort() function is also used for sorting associative arrays. It is used for sorting the elements of the associative array in descending order according to the value. It works just like rsort(), but it preserves the association between keys and its values while sorting.
### Synatx:
`arsort($variable);`
### Example :
```PHP
<?php
$rollno= array("ash"=>1,"xyz"=>34);
asort($rollno);
echo($rollno);
?>
```
## 5. ksort()
### Similar to asort(), ksort() function is also used for sorting associative arrays. But it is used for sorting the elements of the associative array in ascending order according to the key. It preserves the association between keys and its values while sorting, same as asort() function.
### Syntax:
`ksort($variable);`
### Example :
```PHP
<?php
$distance=array("ktm"=>800,"pkr"=>250)
ksort($distance);
echo($distance);
?>
```

## 6. krsort()
### Similar to arsort(), krsort() function is also used for sorting associative arrays. But it is used for sorting the elements of the associative arrary in descending order according to the key. It preserves the association between keys and its values while sorting, same as arsort() function.
### Syntax:
`krsort($variable);`
### Example :
```PHP
<?php
$address= array("ASH"=>"pkr","xyz"=>"ktm");
krsort($address);
echo($address);
?>
```
