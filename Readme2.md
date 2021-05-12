Exercicio Alura
Sobre merge e rebase.
Desta vez focando em rebase
Vimos como é simples resolver conflitos identificados pelo Git ao tentar realizar o merge.

Agora, gere um conflito e, ao invés de utilizar o merge, utilize o rebase para atualizar o master:

Vá para a branch titulo
Commite algo
Vá para a branch master, commite uma alteração na mesma linha
Execute git rebase titulo
Veja a saída do Git e utilize as informações que ela te der para, após corrigir o conflito, continuar o rebase.
