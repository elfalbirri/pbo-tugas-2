import java.util.Scanner;
 
public class CekGanjilGenapPositifNegatif
{
  public static void main(String args[])
  {
    int num;
    System.out.println("Masukkan sebuah bilangan :");
 
    Scanner input = new Scanner(System.in);
    num = input.nextInt();
    
    if ( num % 2 == 0 )
        System.out.println(num + " adalah bilangan genap");
     else
        System.out.println(num + " adalah bilangan ganjil");
    if ( num >= 0 )
        System.out.println(num + " adalah bilangan positif");
        else
        System.out.println(num + " adalah bilangan negatif");
  }  
}