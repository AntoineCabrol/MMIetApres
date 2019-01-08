<section id="programme" class="section programme"
         data-action="display"
         data-name="sectionProgramme">

	<h1 class="deskOnly">Programme</h1>
	<p class="mobileOnly programme__date">Jeudi 17 Janvier</p>

  <?php include "includes/_tables.php" ?>

	<div class="programme__event" id="accueil"
       data-action="hybrid"
       data-type="focus"
       data-parent="sectionProgramme">
    <div class="programme__contenu">
			<h3 class="programme__event-titre">Accueil et café</h3>
      <span class="programme__event-date">8h30</span>
    </div>
		<aside class="programme__contenu programme__contenu--sup">
			<p class="programme__event-description">
				Nous vous accueillons autour d’un café pour bien commencer la journée
			</p>
		</aside>
  </div>

  <div class="programme__event" id="presentation_dut"
       data-action="hybrid"
       data-type="focus"
       data-parent="sectionProgramme">
    <div class="programme__contenu">
      <h3 class="programme__event-titre">Présentation de notre formation</h3>
      <span class="programme__event-date">9h</span>
    </div>
		<aside class="programme__contenu programme__contenu--sup">
			<p class="programme__event-description">Qu’est-ce que MMI et quels sont nos objectifs ?</p>
		</aside>
  </div>

  <div class="programme__event" id="stage_dating"
       data-action="hybrid"
       data-type="focus"
       data-parent="sectionProgramme">
    <div class="programme__contenu">
      <h3 class="programme__event-titre">Stage-dating</h3>
      <span class="programme__event-date">9h30</span>
			<b class="programme__event-plus"></b>
		</div>
		<aside class="programme__contenu programme__contenu--sup">
			<p class="programme__event-description">
				Mise en place de petits entretiens entre professionnel et étudiant
        <button class="programme__event-description--tables bouton--off"
                data-action="trigger"
                data-type="main"
                data-name="programmeTables">Programme table par table ❯</button>
			</p>
			<a href="https://docs.google.com/forms/d/e/1FAIpQLScU8itcWbHU5MdUf5DPczL4y9Q4K7LdoSS4L-tC7vf_0__TqA/viewform" class="mobileOnly bouton bouton--blanc">Inscription</a>
		</aside>
  </div>

  <div class="programme__event" id="anciens"
       data-action="hybrid"
       data-type="focus"
       data-parent="sectionProgramme">
    <div class="programme__contenu">
      <h3 class="programme__event-titre">Anciens étudiants</h3>
      <span class="programme__event-date">9h30</span>
    </div>
		<aside class="programme__contenu programme__contenu--sup">
			<p class="programme__event-description">
				En parallèle des entretiens, venez écouter d'anciens étudiants parler de leur parcours.
			</p>
		</aside>
  </div>

  <div class="programme__event" id="buffet"
       data-action="hybrid"
       data-type="focus"
       data-parent="sectionProgramme">
    <div class="programme__contenu">
      <h3 class="programme__event-titre">Repas / Buffet</h3>
      <span class="programme__event-date">12h - 13h</span>
    </div>
		<aside class="programme__contenu programme__contenu--sup">
			<p class="programme__event-description">
				Pause pour reprendre des forces, c’est le moment pour échanger et rencontrer d’autres entreprises/étudiants
			</p>
		</aside>
  </div>

  <div class="programme__event" id="tables_rondes"
       data-action="hybrid"
       data-type="focus"
       data-parent="sectionProgramme">
    <div class="programme__contenu">
      <h3 class="programme__event-titre">Tables rondes</h3>
      <span class="programme__event-date">13h30-15h</span>
    </div>
		<aside class="programme__contenu programme__contenu--sup">
			<p class="programme__event-description">
				Moment d’échanges interactifs entre professionnels et étudiants autour d’une thématique définie
			</p>
		</aside>
  </div>

  <?php include "includes/_tables.php" ?>

</section>
