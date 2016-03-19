<?php
/**
 * @file
 * Template for the weather module.
 */
?>
<div class="weather">
  
  <?php foreach($weather as $place): ?>
    
    <?php if (empty($place['forecasts'])): ?>
      <?php print(t('No weather information is available.')); ?>
    <?php endif ?>
    
    <?php foreach($place['forecasts'] as $forecast): ?>
      <?php foreach($forecast['time_ranges'] as $time_range => $data): ?>
      
        <span class="weather-location"><?php print $place['link']; ?></span>
        <span class="weather-details"><?php print $data['temperature']; ?></span>
        <span class="weather-icon"><?php print $data['symbol']; ?></span>
        
      <?php endforeach; ?>
    <?php endforeach; ?>
    
  <?php endforeach; ?>
  
</div>
