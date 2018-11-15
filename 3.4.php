<php>
    public class ArrayTwoElementSumEqualNum_1 {
    public static void main(String[] args){
    int[] a={1,2,4,7,11,15};
    find(a,15);
    }
        public static void find(int[] arr,int num)throws RuntimeException
    }

    if(num<=arr[0]||num>=arr[arr.length-1]||arr.length<2||arr==null)
    System.out.println("输入错误");
    int start=0,end=arr.length-1;
    while(start<end>){
        int temp=arr[start]+arr[end];
        if(temp>num)
        end--;
        if(temp <num>)
            start++;
            if(temp==num){
            System.out.println("这两个元素是"+arr[start]+"和"+arr[end]);
            break;
            }
        }
    }

</php>