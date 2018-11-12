<?php  
#include<stdio.h>
main()
{
      int i, j, k;
      int m=0;
      for(i=1;i<5;i++)
      for(j=1;j<5;j++)
      for(k=1;k<5;k++)
      {
               if(i!=j&&k!=j&&i!k)
                     m++;
                     printf("%d%d%d\n",q,j,k);
       }
       printf("%d\n",m);
}
?>