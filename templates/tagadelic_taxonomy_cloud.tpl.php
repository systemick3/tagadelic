<ul class="tag-cloud">
  <?php foreach ($tags as $tag): ?>
  <li>
    <?php print $tag ?>
  </li>
  <?php endforeach; ?>
</ul>
<?php if($more_link): ?>
  <div class="tag-cloud-more-link">
    <?php echo $more_link; ?>
  </div>
<?php endif; ?>