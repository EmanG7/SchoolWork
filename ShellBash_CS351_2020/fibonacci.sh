#! /bin/sh

while [ 1 ]; do
FIB_ONE=0
FIB_TWO=0
i=0
#read -p "Enter the n term for Fibonacci's number: " num
num=9000
until [ $i -eq $num ]; do
  case $i in
  0)
    FIB_TWO=1
  ;;
  *)
    TEMP=$FIB_ONE
    FIB_ONE=$FIB_TWO
    FIB_TWO=$(($TEMP + $FIB_ONE))
  ;;
  esac; i=$(($i + 1)); done
echo "The $num term in Fibonacci sequence is $FIB_ONE"
done