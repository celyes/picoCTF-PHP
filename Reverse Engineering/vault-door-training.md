### Vault door training

after reading the descripton, download the file named `VaultDoorTraining.java` and open it.

this is the code inside the file:


```java
import java.util.*;

class VaultDoorTraining {
    public static void main(String args[]) {
        VaultDoorTraining vaultDoor = new VaultDoorTraining();
        Scanner scanner = new Scanner(System.in); 
        System.out.print("Enter vault password: ");
        String userInput = scanner.next();
	String input = userInput.substring("{".length(),userInput.length()-1);
	if (vaultDoor.checkPassword(input)) {
	    System.out.println("Access granted.");
	} else {
	    System.out.println("Access denied!");
	}
   }

    // The password is below. Is it safe to put the password in the source code?
    // What if somebody stole our source code? Then they would know what our
    // password is. Hmm... I will think of some ways to improve the security
    // on the other doors.
    //
    // -Minion #9567
    public boolean checkPassword(String password) {
        return password.equals("w4rm1ng_Up_w1tH_jAv4_eec0716b713");
    }
}
```

the code is self-explanatory and by reading it, it's clear that it asks the user to provide a password and then prepends `picoCTF{` string to the provided password and then, checks against a hard-coded value in `checkPassword()` method.

So the flag is definitely `picoCTF{w4rm1ng_Up_w1tH_jAv4_eec0716b713}`