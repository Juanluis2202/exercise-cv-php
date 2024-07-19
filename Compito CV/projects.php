<?php
function getProjects() {
    return [
        ["title" => "Progetto 1", "description" => "Descrizione del progetto 1"],
        ["title" => "Progetto 2", "description" => "Descrizione del progetto 2"],
        ["title" => "Progetto 3", "description" => "Descrizione del progetto 3"]
    ];
}

$projects = getProjects();
?>

<div class="projects">
    <?php foreach ($projects as $project): ?>
        <div class="project">
            <h4><?php echo $project['title']; ?></h4>
            <p><?php echo $project['description']; ?></p>
        </div>
    <?php endforeach; ?>
</div>
