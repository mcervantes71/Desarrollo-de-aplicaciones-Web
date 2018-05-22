/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package wrapper;

/**
 *
 * @author Humberto
 */
public class Wrapper {

    public static void main(String[] args) {
        Integer i = new Integer(5);
        Integer i5 = 5;
        i5++;
        byte b = i.byteValue();
        int j = Integer.parseInt("25");
        Boolean untruth = new Boolean("false");
        boolean truth = Boolean.valueOf("true");
        System.out.println("i: " + i + " i5: " + i5);
        System.out.println("b: " + b);
        System.out.println("j: " + j);
        System.out.println("untruth: " + untruth);
        System.out.println("truth: " + truth);
    }
}