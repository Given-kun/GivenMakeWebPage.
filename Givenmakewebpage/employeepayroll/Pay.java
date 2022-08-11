import java.util.Scanner;
 /* Code by Given Valenzuela **
 *
 *
 *
 
 **/
public class ObjectAndClasses{

    public static void main(String[] args) {
        ObjectAndClasses object = new ObjectAndClasses();
        Scanner input = new Scanner(System.in);
 
        int totalDays = 0, hours = 0;
        double netPay_1_15 = 0, netPay_16_30 = 0;
 
        System.out.print("Please enter the month: ");
        String month = input.nextLine();
        System.out.println("");
 
        month = month.substring(0, 1).toUpperCase() + month.substring(1);
        System.out.println(month + " 1-15 Salary\n");
 
        totalDays = object.setDays(totalDays, input);
        hours = object.setHours(hours, input);
        object.displayData(object, totalDays, hours);
        netPay_1_15 = object.getNetPay(totalDays, hours);
 
        System.out.println(month + " 16-30 Salary\n");
 
        totalDays = object.setDays(totalDays, input);
        hours = object.setHours(hours, input);
        object.displayData(object, totalDays, hours);
        netPay_16_30 = object.getNetPay(totalDays, hours);
 
        System.out.printf("Monthly salary for " + month + " is %.2f%n",
                object.getMonthlySalary(netPay_1_15, netPay_16_30));
    }
 

    public int setDays(int totalDays, Scanner input) {
        System.out.print("Please enter the total day: ");
        return totalDays = input.nextInt();
    }
 
    public int setHours(int hours, Scanner input) {
        System.out.print("Enter the total number of hours  per day: ");
        return hours = input.nextInt();
    }
 
   
    public int getTotalHours(int totalDays, int hours) {
        return totalDays * hours;
    }
 
  
    public double getGrossPay(int totalDays, int hours) {
        return getTotalHours(totalDays, hours) * 100;
    }
 

    public double getTax(int totalDays, int hours) {
        final double tax = .20;
        return tax * getGrossPay(totalDays, hours);
    }
 

    public double getNetPay(int totalDays, int hours) {
        return getGrossPay(totalDays, hours) - getTax(totalDays, hours);
    }
 
  
    public double getMonthlySalary(double netPayOne, double netPayTwo) {
        return netPayOne + netPayTwo;
    }
 
  
    public void displayData(ObjectAndClasses object, int totalDays, int hours) {
        System.out.println("Total Hours: " + object.getTotalHours(totalDays, hours));
        System.out.printf("Gross Pay: %.2f%n", object.getGrossPay(totalDays, hours));
        System.out.printf("Tax: %.2f%n", object.getTax(totalDays, hours));
        System.out.printf("Net pay: %.2f%n", object.getNetPay(totalDays, hours));
        System.out.println("");
        System.out.println("😎(⌐■_■)༼ つ ◕_◕ ༽つ");
        
    }
}
 /*
 *******************
 ******************
 **
 **
 **
 *************
 *************
 **
 **
 **
 **
 *******************
 *******************
 
 
 
 */