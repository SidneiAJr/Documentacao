# Exemplo de codigo:

```java
package java1;

import java.util.Scanner;

public class Java1 {

    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        System.out.println("Insira uma Opcao\n1-Ninja\n2-Inimigo\n3-Quantidade de Lutas");
        int opcao = 0;
        while(opcao!=4){
            opcao = entrada.nextInt();
             switch(opcao){
            case 1:
               ninja n1 = new ninja(100, "Inimigo", 5);
               n1.ver();
             break;
             case 2:
                inimigo i1 = new inimigo(100,2);
                i1.ver();
                break;
             case 3:
                luta l1 = new luta(1, 100, 2);
                l1.ver();
             default:
                 System.out.println("Opção Indisponivel");
                 break;
        }
System.out.println("Insira uma Opcao\n1-Ninja\n2-Inimigo\n3-Quantidade de Lutas");
    }
        }
}


interface verificar{
    void ver();
}

class ninja implements verificar{
    protected int vida;
    protected double dano;
    protected String Nome;

    public ninja(double dano, String Nome,int vida) {
        this.dano = dano;
        this.Nome = Nome;
        this.vida = vida;
    }

    @Override
    public void ver() {
        vida = 100;
        dano = 1;
        while(vida>0){
            vida --;
            dano +=0.02;
            System.out.println("Ninja esta lutando contra "+Nome+" Vida esta diminuindo "+vida+" E o dano esta Aumentando "+dano);
        }
        System.out.println("Ninja Morreu kkkk!");
    }
}

class inimigo implements verificar{
    protected int VidaInimogo;
    protected int Dano;

    public inimigo(int VidaInimogo, int Dano) {
        this.VidaInimogo = VidaInimogo;
        this.Dano = Dano;
    }
    
    public void ver(){
        VidaInimogo = 100;
            while(VidaInimogo>0){
                 VidaInimogo --;
                System.out.println("Inimigo Lutando contra Ninja "+VidaInimogo+" Dano Inimgo "+Dano);
            }
                System.out.println("Inimigo Morreu kk!");
            }
            
        

    
}

class luta extends inimigo implements verificar{
    protected int quantidadeLuta;

    public luta(int quantidadeLuta, int VidaInimogo, int Dano) {
        super(VidaInimogo, Dano);
        this.quantidadeLuta = quantidadeLuta;
    }

    @Override
    public void ver() {
        Scanner quant = new Scanner(System.in);
        System.out.println("Insira a quantidade de Lutas (0 a 5)");
        quantidadeLuta = quant.nextInt();
        for(int i=1; i<=quantidadeLuta; i++){
            System.out.println(" Quantidade de Lutas entre Ninja e Inimigo "+i);
        }
    }
}
```
   
