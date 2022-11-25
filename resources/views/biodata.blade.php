<!DOCTYPE html>
<style>
    table,tr,td{
        border: solid black 1px;
    }
</style>
<body>
    <div class="content">
        <div class="title m-b-md">
            @if(isset($nrp))
            @if ($nrp == "160419083")
                <h2>Devina Aprilia Ariyanti</h2>
                <h2>{{$nrp}}</h2>
                <h2>Asal Kelahiran: Banjarbaru</h2>
                <h2>Hobby: Ngopi</h2>
            @elseif ($nrp == "160419139")
                <h2>Helmi Nizar Baktir</h2>
                <h2>{{$nrp}}</h2>
                <h2>Asal Kelahiran: Surabaya</h2>
                <h2>Hobby: Racing</h2>
            @elseif ($nrp == "160419158")
                <h2>Safira Arinta Azzahra</h2>
                <h2>{{$nrp}}</h2>
                <h2>Asal Kelahiran: Surabaya</h2>
                <h2>Hobby: Ngoding</h2>
            @endif
            @else
            <table style='border: 1px solid black;'>
                <tr>
                    <td>
                        Nama
                    </td>
                    <td>
                        NRP
                    </td>
                    <td>
                        Detail
                    </td>
                </tr>
                <tr>
                    <td>
                        Devina Aprilia Ariyanti
                    </td>
                    <td>
                        160419083
                    </td>
                    <td>
                        <form action="../myfriend/160419083">
                            <button>View</button>

                        </form>
                    </td>
                </tr>
                <tr>
                    <td>
                        Helmi Nizar Baktir
                    </td>
                    <td>
                        160419139
                    </td>
                    <td>
                        <form action="../myfriend/160419139">
                            <button>View</button>

                        </form>
                    </td>
                </tr>
            </table>
            @endif
        </div>
    </div>
</body>
</html>