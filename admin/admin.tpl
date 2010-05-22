<div class="titrePage">
  <h2>BlancmontXL</h2>
</div>

<form method="post" class="properties" action="" ENCTYPE="multipart/form-data" name="form" class="properties">
<div id="configContent">
  <fieldset id="mainConfCheck">
    <legend></legend>
      <ul>
        <li>
          <span class="property">{'Display page banner on home page'|@translate}</span>
          <input type="checkbox" name="bmxl[home]" value="true" {if $bmxl.home}checked="checked"{/if}>
        </li>
        <li>
          <span class="property">{'Display page banner on categories pages'|@translate}</span>
          <input type="checkbox" name="bmxl[categories]" value="true" {if $bmxl.categories}checked="checked"{/if}>
        </li>
        <li>
          <span class="property">{'Display page banner on picture page'|@translate}</span>
          <input type="checkbox" name="bmxl[picture]" value="true" {if $bmxl.picture}checked="checked"{/if}>
        </li>
        <li>
          <span class="property">{'Display page banner on other pages'|@translate}</span>
          <input type="checkbox" name="bmxl[other]" value="true" {if $bmxl.other}checked="checked"{/if}>
        </li>
		 <li>
          <span class="property">{'Use MontBlancXL icon set'|@translate}</span>
          <input type="checkbox" name="bmxl[ico]" value="true" {if $bmxl.ico}checked="checked"{/if}>
        </li>
      </ul>
  </fieldset>
</div>
<p><input class="submit" type="submit" value="{'Submit'|@translate}" name="submit" /></p>
</form>