/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package wrapper;

/**
 *
 * @author Humberto
 */
public class Wrapper2{
	public static void main(String args[]){
		Integer i=1;
		Integer j=i;
		j++;
		if(i==j){
			System.out.println("true "+i);
		}
		switch(i){
			case 1:
			System.out.println("A");
		}
	}
}