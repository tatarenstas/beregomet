<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
</style>
</head>
<body>

<h3>Меню</h3>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'ProBeregomet')">Про Берегомет</button>
  <button class="tablinks" onclick="openCity(event, 'Novunu')">Новини</button>
  <button class="tablinks" onclick="openCity(event, 'Ogoloshenya')">Оголошення</button>
  <button class="tablinks" onclick="openCity(event, 'Yakopublicogol')">Як опублікувати оголошення</button>
  <button class="tablinks" onclick="openCity(event, 'Zvyazok')">Про нас/Звязок з нами</button>
</div>

<div id="ProBeregomet" class="tabcontent">
  <h3>Про Берегомет</h3>
      <div class="kartynku">
      <img src="Картинки/Берегомет2.jpg">
      <img src="Картинки/Берегомет3.jpg">
      <img src="Картинки/Берегомет1.jpg">
      <img src="Картинки/Берегомет4.jpg">
      <img src="Картинки/Берегомет5.jpg">
    </div>
    <div>
      <img src="Картинки/Берегомет6.png" width="400" height="200">
      <table border=3px>
        <tr>
          <th>Країна</th>
          <th>Область</th>
          <th>Район/міськрада</th>
          <br>
          <th>Засноване</th>
          <th>Площа</th>
          <th>Населення</th>
          <th>Географічні координати</th>
          <th>Висота над рівнем моря</th>
          <th>Водойма</th>
        </tr>
        <tr>
          <td>Україна</td>
          <td>Чернівецька область</td>
          <td>Вижницький район</td>
          <br>
          <td>15 століття</td>
          <td>19,6 км²</td>
          <td>7 604(2020)[1]</td>
          <td>48°11′24″ пн. ш. 25°22′36″ сх. д.</td>
          <td>467 м</td>
          <td>р. Серет</td>
        </tr>
      </table>
      <br>
      <a class="statty_vikipediya" href="https://uk.wikipedia.org/wiki/%D0%91%D0%B5%D1%80%D0%B5%D0%B3%D0%BE%D0%BC%D0%B5%D1%82_(%D1%81%D0%BC%D1%82)" target="_blank">
      Стаття в Вікіпедії</a>
      <br>
      <p>Берегоме́т — селище міського типу Вижницького району Чернівецької області.<br>Коли саме почали заселяти люди Берегомет, ніхто зараз не скаже, але на основі досліджень, архівних даних, переказів можна припустити, що це було не пізніше XV століття.</p>
      <p>Через селище протікає річка Серет. Біля річки є гора Стіжок. За однією з теорій назва Берегомет походить від німецького — Berg (гора). За іншою версією назва Берегомет походить від того що річка Серет береги метає.

У селищі є гімназія та 4 школи, ПВНЗ Берегометський політехнічний технікум, автошкола, залізнична станція, завод, лісгосп, лікарня, ратуша та ринок. Розвинута приватна промисловість у галузі переробки деревини.

У Берегометі залишилося декілька визначних пам'яток, пов'язаних з життєдіяльністю шляхетного роду Васильків.

Найяскравіша споруда — Замок Берегомет, який існував на початку XX століття, у первісному вигляді не зберігся.

У центрі стоїть мурована Михайлівська церква (побудована 1888 року), безпосередньо пов'язана з родом Васильків.

На вулиці Центральній, 12 збереглася колишня споруди літньої резиденції роду Васильків (нині селищна лікарня).

1890 року Микола Василько заклав Берегометський дендропарк. Його площа — 1 гектар, тут росте 54 види дерев і чагарників. Перлиною парку є два дерева псевдомодрини золотистої.

При виїзді з Берегомета у бік Сторожинця ліворуч від дороги стояла дерев'яна церква Св. Юрія 1890 року з дзвіницею, яка згоріла 18 червня 2010 року[3]

У Берегометі розміщується адміністрації НПП «Вижницький».</p>
</div>
</div>

<div id="Novunu" class="tabcontent">
  <h3>Новини</h3>
</div>

<div id="Ogoloshenya" class="tabcontent">
   <h3>Оголошення</h3>
</div>

<div id="Yakopublicogol" class="tabcontent">
   <h3>Як опублікувати оголошення</h3>
</div>

<div id="Zvyazok" class="tabcontent">
   <h3>Про нас/Звязок з нами</h3>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
</body>
</html> 