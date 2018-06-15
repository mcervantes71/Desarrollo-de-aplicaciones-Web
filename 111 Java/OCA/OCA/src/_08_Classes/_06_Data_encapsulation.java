package _08_Classes;

import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

class Company
{
    private String name;
    private List<String> employees = new ArrayList<>();

//    public Company() {}

    public void printSorted()
    {
        System.out.println("companyName= " + name);
        Collections.sort(employees);
        System.out.println("sorted= " + employees);
    }

    public void setName(String name)
    {
        if(name == null)
        {
            System.out.println("name cant be null");
            return;
        }

        this.name = name;
    }

    public String getName()
    {
        return name;
    }

    public void addEmployee(String name)
    {
        if (name == null || name.isEmpty())
        {
            System.out.println("cant add null employee");

        }
        else
        {
            employees.add(name);
        }
    }
}

public class _06_Data_encapsulation
{
    public static void main(String[] args)
    {
        Company company = new Company();
        company.setName("MyCompany");
        company.addEmployee("John");
        company.addEmployee("Anthony");
        company.addEmployee(null);
        company.addEmployee("");

        company.setName(null);

        company.printSorted();

        // company.name = null;
        // company.printSorted();
        
        // company.employees = null;
        
        // company.employees.add("Jimmy");
        // company.printSorted();
    }
}
