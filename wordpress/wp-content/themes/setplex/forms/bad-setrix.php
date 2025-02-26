<?php
/**
 * Template part for Book a Demo Setrix Form.
 * https://setplex.com/book-a-demo-setrix/
 */

?>

<form class="form-plain" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&amp;orgId=00DHp000003T6R6" autocomplete="off" id="getademoform" method="post" name="getademoform">

  <input name="oid" type="hidden" value="00DHp000003T6R6">
  <input name="retURL" type="hidden" value="https://setplex.com/thank-you-demo/">
  <input id="00NPl000001Yr30" name="00NPl000001Yr30" title="Lead Language" type="hidden" value="English">
  <input id="00NPl000001m7ps" name="00NPl000001m7ps" type="hidden" value="Setrix Form">
  <input id="00NPl000001m7mb" maxlength="255" name="00NPl000001m7mb" type="hidden">
  <input id="00NPl000001m7mf" maxlength="255" name="00NPl000001m7mf" type="hidden">
  <input id="00NPl000001m7mc" maxlength="255" name="00NPl000001m7mc" type="hidden">
  <input id="00NPl000001m7mg" maxlength="255" name="00NPl000001m7mg" type="hidden">
  <input id="00NPl000001m7me" maxlength="255" name="00NPl000001m7me" type="hidden">
  <input id="00NPl000001m7md" maxlength="255" name="00NPl000001m7md" type="hidden" size="20">

  <div class="form-input-group">
    <div class="form-input-with-label parsley-item">
      <label for="first_name">First Name *</label>
      <input autocomplete="off" id="first_name" name="first_name" type="text" placeholder="First Name" required data-parsley-required="true" data-parsley-trigger="change">
    </div>
    <div class="form-input-with-label parsley-item">
      <label for="last_name">Last Name *</label>
      <input autocomplete="off" id="last_name" name="last_name" type="text" placeholder="Last Name" required data-parsley-required="true" data-parsley-trigger="change">
    </div>
  </div>

  <div class="form-input-group">
    <div class="form-input-with-label parsley-item">
      <label for="email">Work Email *</label>
      <input autocomplete="off" id="email" name="email" type="email" placeholder="Work Email" required  data-parsley-type="email" data-parsley-trigger="change" data-parsley-emailDomainCheck="true">
    </div>
    <div class="form-input-with-label parsley-item">
      <label for="title">Job Title *</label>
      <input autocomplete="disabled" id="title" name="title" type="text" placeholder="Job Title" required data-parsley-required="true" data-parsley-trigger="change">
    </div>
  </div>

  <div class="form-input-group">
    <div class="form-input-with-label parsley-item">
      <label for="company">Company Name *</label>
      <input autocomplete="off" id="company" name="company" type="text" placeholder="Company Name" required data-parsley-required="true" data-parsley-trigger="change">
    </div>
    <div class="form-input-with-label parsley-item">
      <label for="phone">Phone Number *</label>
      <input type="tel" id="phone" name="phone"  placeholder="Phone Number" required data-parsley-pattern="^\+?[0-9\s\-]{7,15}$" data-parsley-trigger="change" data-parsley-phoneLength="true">
    </div>
  </div>

  <div class="form-input-group">
    <div class="form-input-with-label parsley-item">
      <label for="country">Country *</label>
      <select id="country" name="00NPl000001Yr2w" required data-parsley-required="true">
        <option value="" selected disabled>Select</option>
      </select>
    </div>
    <div class="form-input-with-label parsley-item">
      <label class="label-input" for="00NPl000001yXF3">Demo Intended For
      </label>
      <select id="00NPl000001yXF3" name="00NPl000001yXF3" title="Demo Intended For">
        <option value="TV Network / Broadcaster">TV Network / Broadcaster</option>
        <option value="Cable Operator">Cable Operator</option>
        <option value="Internet Provider">Internet Provider</option>
        <option value="Content Aggregator">Content Aggregator</option>
        <option value="Content Distributor">Content Distributor</option>
        <option value="Multi-operator">Multi-operator</option>
        <option value="Integrator">Integrator</option>
        <option value="Government">Government</option>
        <option value="Other">Other</option>
      </select>
    </div>
  </div>

  <div class="form-input-group">
    <div class="form-input-with-label form-input-with-textarea parsley-item">
      <label for="addInfo">What is your inquiry about? *</label>
      <textarea id="addInfo" name="00NPl000001Yr31" rows="6" required></textarea>
    </div>
  </div>

  <p class="form-policy">
    By clicking Book My Demo you confirm that you have read and agree to
    our&nbsp;<a href="https://setplex.com/privacypolicy/" target="_blank">Privacy Policy</a>.
  </p>

  <button type="submit" class="form-btn page-color-btn product-btn-brand">
    <span>Book My Demo</span>
  </button>

</form>
