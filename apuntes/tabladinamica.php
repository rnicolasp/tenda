<table>
    <thead>
        <tr>
            <th> ID </th>
            <th> Nom </th>
            <th> Proveidors </th>
        </tr>
    </thead>
    <tbody>
        <?php
<<<<<<< HEAD
            $query="SELECT pr.*,pv.Nom as NomPv from Producte as pr inner join Proveidor as pv on (pr.FK_Proveidor = pv.ID) order by pr.Nom";
            $result mysqli:_query($bbdd,$query);
            while($row=msqli_fetch_assol ($result);
=======
            $query="SELECT pr.*,pv.Nombre as NomPv from Producte as pr inner join Proveidor as pv on (pr.idProveidor = pv.ID) order by pr.Nom";
            $result = mysqli_query($bbdd,$query);
            while($row=mysqli_fetch_assoc($result)) {
>>>>>>> master
                echo "<tr>
                        <td>$row [ID] </td>
                        <td>$row[Nom]</td>
                        <td>$row [NomPr]</td>                        
                        </tr>";
            }
                    
                    ?>
    </tbody>
</table>