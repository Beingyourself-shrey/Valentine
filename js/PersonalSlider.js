	j=0;k=0;l=0;
		
		
		 var a=document.getElementsByClassName('change-img1');
              for(var i=1;i<a.length;i++)
              {
              	a[i].style.display='none';
              	



              }
               var a=document.getElementsByClassName('change-img2');
              for(var i=1;i<a.length;i++)
              {
              	a[i].style.display='none';
              


              }
              call1();
		
		function call1()
		{
              var a=document.getElementsByClassName('change-img');
              for(var i=0;i<a.length;i++)
              {
              	a[i].style.display='none';
                

              }
             
              k++;
              if(k>a.length)
              	k=1;
               a[k-1].style.display='block';
               
            
              setTimeout(call2,1400);


		}
         function call2()
		{
              var a=document.getElementsByClassName('change-img1');
              for(var i=0;i<a.length;i++)
              {
              	a[i].style.display='none';
              	a[i].classList.remove("fade");

              }
             
              l++;
              if(l>a.length)
              	l=1;
               a[l-1].style.display='block';
              setTimeout(call3,1400);

		}
             function call3()
		{
              var a=document.getElementsByClassName('change-img2');
              for(var i=0;i<a.length;i++)
              {
              	a[i].style.display='none';

              }
              
              j++;
              if(j>a.length)
              	j=1;
              a[j-1].style.display='block';
               a[j-1].className+=" fade";
             
             setTimeout(call1,1400);
         }
		
		
