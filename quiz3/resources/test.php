<?php
            if ($connOk) {
                $query = 'select * from myProjects order by projectNumber';
                $result = $conn->query($query);
                $numRecords = $result->num_rows;
                echo '<ul class="labs">';
                for ($i = 0; $i < $numRecords; $i++) {
                    $record = $result->fetch_assoc();
                    echo '<li>';
                    echo '<a href="' . ($record['projectLink']) . '">';
                    echo htmlspecialchars($record['projectClass']) . '-' . htmlspecialchars($record['projectTitle'])
                    echo '</a>'
                    echo '</li>'
                }
                $result->free();
                $conn->close();
            }

        ?>