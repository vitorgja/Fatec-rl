algoritmo "Lista3-Ex13"

// ** Equação do segundo grau - Ler os coeficientes a, b e c de uma equação de
//    segundo grau e, antes de calcular as raízes, calcula o delta. Se este for
//    negativo, informa que a equação não tem solução real. Se for zero, mostra
//    a única raiz. Se positivo, mostra as duas raízes.


var
   a,b,c:inteiro
   delta,x1,x2:real
inicio
// Seção de Comandos

   escreval("Para a esquação do segundo Grau Digite o")
   escreva("Valor de A: ")
   leia(a)
   escreva("Valor de B: ")
   leia(b)
   escreva("Valor de C: ")
   leia(c)
   
   delta:= b^2-4*a*c
   escreval("Delta: ",delta)
   
   se delta < 0 entao
        escreval("a equação não tem solução real!")
   senao
        x1:= (-b + raizq(delta)) /(2*a)
        x2:= (-b - raizq(delta)) /(2*a)
        escreval("x1",x1)
        escreval("x2",x2)
   fimse
   
fimalgoritmo
