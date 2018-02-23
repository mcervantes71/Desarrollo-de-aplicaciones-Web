package wrapper;

public class Wrapper4{
	int i;
	Integer j;
	int suma=10;
	Wrapper4(){
		suma+=i+j;
		System.out.println(suma);
	}
	public static void main(String args[]){
		new Wrapper4();
	}
}