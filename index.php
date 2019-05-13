<?php
    require __DIR__ . '/vendor/autoload.php';
    use Phpml\Dataset\CsvDataset;
    use Phpml\Classification\NaiveBayes;

    $dataset = new CsvDataset('dados.csv', 3, true);

    $samples = $dataset->getSamples();
    $labels = $dataset->getTargets();

    $classifier = new NaiveBayes();
    $classifier->train($samples,$labels);

    echo $classifier->predict([1, 0, 1]);