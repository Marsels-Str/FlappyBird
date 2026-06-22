Šis projekts ir populārās spēles "Flappy Bird" pakaļdarinājums, tāpēc tas nav tik stiliīgs, bet funkcionāli pilda tādu pašu nolūku!

Projekt mērķis bija izstrādāt pēc iespējas ticamāku pakaļdarinājumu.

Projekts ir vedots tikai un vienīgi ar "Laravel" un "Javascript", tāpēc to ir vienkārši noklonēt un palaist uz savas ierīces.

Soļi, kā dabūt šo projektu sev lokāli (iepriekšejas zināšanas ir nepieciešamas):

1. Sevis izvēlētajā mapē, caur termināli palaist šo komandu - git clone https://github.com/Marsels-Str/FlappyBird.git
2. Tad atvērt šo projektu ar - cd "un projekta nosaukums", "lai redzētu visas mapes, kas atrodas iekšā izvēlētajā mapē izmantot" - ls
3. Tad vienkārši izpildīt secīgi - composer install "un" npm install

Lai iegūtu datubāzi atvērt projektu caur koda redaktoru (Visual studio code) un nokopēt .env.example failu vai vienkārši pārsaukt to par .env un atkomentēt datubāzes sadaļu (DB).
Protams, kad vajag savadīt savus datubāzes parametrus, ja ir iepriekš izveidota, ja nav tad to tāpāt izdarīt!
1. Tad terminālī - php artisan migrate
2. Lai palaistu projektu - composer run dev
