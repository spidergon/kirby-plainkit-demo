<?php

return function () {
  // return collection('projects')->filterBy('featured', true);
  return collection('projects')->shuffle()->limit(3);
};
