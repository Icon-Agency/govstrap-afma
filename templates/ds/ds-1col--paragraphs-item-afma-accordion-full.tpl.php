<?php

/**
 * @file
 * Display Suite 1 column template.
 */
?>
<?php
    $accordion_title = render($content['field_title']);
    $accordion_id = _human_to_machine($accordion_title).'-'.rand(100,999);
    $accordion_open = '';
    $accordion_link_class = 'collapsed';
    if (render($content['field_accordion_open']) == 'Accordion open') {
      $accordion_open = 'show';
      $accordion_link_class = '';
    }
?>
<div class="card">
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
    <div class="card-header" role="tab" id="accordion-header-<?php print $accordion_id;?>">
        <h2 class="mb-0 h3">
            <a class="<?php print $accordion_link_class; ?>" data-toggle="collapse" href="#accordion-<?php print $accordion_id; ?>" aria-expanded="true" aria-controls="accordion-<?php print $accordion_id; ?>">
                <?php print $accordion_title; ?>
            </a>
        </h2>
    </div>

    <div id="accordion-<?php print $accordion_id; ?>" class="collapse <?php print $accordion_open; ?>" role="tabpanel" aria-labelledby="accordion-header-<?php print $accordion_id;?>" data-parent="#accordion-group" style="">
        <div class="card-body">
            <div class="pb-3"><?php print render($content['field_text']); ?></div>
        </div>
    </div>
</div>


