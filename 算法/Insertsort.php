<?php 
/**
 * 插入排序
 * 思路分析：在要排序的一组数中，假设前面的数已经是排好顺序的，现在要把第n个数插到前面的有序数中，使
 * 得这n个数也是排好顺序的。如此反复循环，直到全部排好顺序。
 */

$arr=array(1,43,54,62,21,66,32,78,36,76,39);  

// //插入排序法(小到大排序)   效率又比  选择排序法要高一些
// function insertSort(&$arr){
//    //先默认下标为0的这个数已经是有序
//    for($i=1;$i<count($arr);$i++){
//        //$insertVal是准备插入的数
//        $insertVal=$arr[$i];
//        //准备先和谁下标为$inserIndex的比较
//        $inserIndex=$i-1;
//        //如果这个条件满足，说明我们还没有找到适当的位置
//        while($inserIndex >= 0 && $insertVal < $arr[$inserIndex]){
//        //同时把数后移
//             $arr[$inserIndex+1] = $arr[$inserIndex];
//             $inserIndex--;
//        }
//        //插入（这时就给$inserIndex找到适当的位置）
//        $arr[$inserIndex+1] = $insertVal;
//    }
// }


function insertSort($arr) {
    //区分 哪部分是已经排序好的
   //哪部分是没有排序的
    //找到其中一个需要排序的元素
    //这个元素 就是从第二个元素开始，到最后一个元素都是这个需要排序的元素
   //利用循环就可以标志出来
    //i循环控制 每次需要插入的元素，一旦需要插入的元素控制好了，
    //间接已经将数组分成了2部分，下标小于当前的（左边的），是排序好的序列
     $len=count($arr);
     for ($i=1; $i < $len; $i++) {
       //获得当前需要比较的元素值。
         $tmp = $arr[$i];
        //内层循环控制 比较 并 插入
         for ($j = $i - 1; $j >= 0; $j--) {
            //$arr[$i];//需要插入的元素; $arr[$j];//需要比较的元素
            if ($tmp < $arr[$j]) {
                 //发现插入的元素要小，交换位置
                //将后边的元素与前面的元素互换
                $arr[$j + 1] = $arr[$j];
                //将前面的数设置为 当前需要交换的数
                 $arr[$j] = $tmp;
            } else {
                //如果碰到不需要移动的元素
                //由于是已经排序好是数组，则前面的就不需要再次比较了。
                 break;
            }
         }
    }
     //将这个元素 插入到已经排序好的序列内。
    //返回
    return $arr;
 }
 $arr = array(88, 1, 2, 5, 4, 3, 66, 0);
 $res = insertSort($arr);
 print_r($res);



 ?>