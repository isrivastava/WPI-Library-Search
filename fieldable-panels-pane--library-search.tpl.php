<div class="<?php print $classes; ?> column-gutter" <?php print $attributes; ?>>
  <h2 class="white-text library-search-heading myriad-font"><?php echo $content['widget_title']; ?></h2>
  <div class="library-search-wrapper">
    <form id="primo-library-search" class="clearfix library-search-form" name="searchForm" method="post" target="_blank" action="/">
      <!-- Customizable Parameters -->
      <input type="hidden" name="vid" id="vid" value="01WPI_INST:Default">
      <input type="hidden" name="tab" id="tab_value" value="Everything">
      <input type="hidden" name="search_scope" id="scope_value" value="MyInst_and_CI">
      <input type="hidden" name="mode" id="mode" value="basic">
      <!-- Fixed parameters -->
      <input type="hidden" name="displayMode" id="displayMode" value="full">
      <input type="hidden" name="bulkSize" id="bulkSize" value="10">
      <input type="hidden" name="highlight" id="highlight" value="true">
      <input type="hidden" name="dum" id="dum" value="true">
      <input type="hidden" name="query" id="primoQuery">
      <input type="hidden" name="displayField" id="displayField" value="all">
      <!-- Enable this if "Expand My Results" is enabled by default in Views Wizard -->
      <input type="hidden" name="pcAvailabiltyMode" value="true">
      <input type="text" id="primoQueryTemp" value="" size="35" placeholder="Example: “life cycle assessment” cars" 
             class="d-inline-block library-search-input">
      <select name="search-options" id="search-options" class="d-inline-block library-search-options">
        <option value="Everything" selected="selected">Articles, Books, Media &amp; More</option>
        <option value="CentralIndex">Articles</option>
        <option value="LibraryCatalog">Books &amp; Media</option>
        <option value="CourseReserves">Course Reserves</option>
        <!-- <option value="studentWorks">Student Projects &amp; Research</option> -->
      </select>
      <!-- Search Button -->
      <button title="Search" type="submit" value="Search" alt="Search" class="library-search-submit-button icon-search transparent-button"><span class="sr-only">Search</span></button>
    </form>

    <div class="more-options yellow-links">
      <span class="search-option-label semibold white-text">More Search Options: </span>
      <a href="https://wpi.primo.exlibrisgroup.com/discovery/search?vid=01WPI_INST:Default&sortby=rank&mode=advanced" target="_blank">Advanced Search</a>
      <span class="white-text"> | </span>
      <a href="http://libguides.wpi.edu/c.php?g=355236&p=2956130" target="_blank">Databases</a>
      <span class="white-text"> | </span>
      <a href="http://libguides.wpi.edu/c.php?g=388384&p=2635012" target="_blank">Research Guides</a>
      <span class="white-text"> | </span>
      <a href="https://browzine.com/libraries/732/subjects" target="_blank">EJournals</a>
      <span class="white-text"> | </span>
      <a href="https://web.wpi.edu/E-project-db/E-project-search/search" target="_blank">Student Projects</a>
    </div>
  </div>
</div>
