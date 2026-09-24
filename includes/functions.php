<?php

function clean($value)
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

function getProjects($conn)
{
    $projects = [];

    if (!isset($conn) || !($conn instanceof mysqli)) {
        return $projects;
    }

    $sql = "SELECT id, title, description, role, technologies, image, project_url
            FROM projects
            ORDER BY created_at DESC";

    $result = $conn->query($sql);

    if ($result) {

        while ($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }

    }

    return $projects;
}

?>