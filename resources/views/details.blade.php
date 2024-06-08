@extends('layouts.app')
@section('content')

<div class="container-fluid text-center" id="header">
        <h3>Details about the conference</h3>
    </div>


    <div class="container">

        <h3 class="display-7 mt-3 mb-1">Conference Date: 22-24 September 2023</h3>
        <h3 class="display-7 mb-3">Submission deadlines and page limits</h3>

        <!-- The bottom table is 1st table -->
        <table id="table1">
            <thead>
                <tr style="background-color: white;">
                    <th colspan="2" style="text-align: center;">Pages</th>
                    <th>Deadline</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Paper</td>
                    <td>6 pages plus 1 page for reference if required</td>
                    <td>1 April</td>
                </tr>
        
                <tr>
                    <td>Working group</td>
                    <td>2 pages</td>
                    <td>1 April</td>
                </tr>
        
                <tr>
                    <td>Poster</td>
                    <td>1 page</td>
                    <td>15 June</td>
                </tr>
        
                <tr>
                    <td>Doctoral consortium</td>
                    <td>2 pages</td>
                    <td>15 June</td>
                </tr>
        
                <tr>
                    <td>Tips, techniques & courseware</td>
                    <td>2 pages</td>
                    <td>15 June</td>
                </tr>
            </tbody>
        </table>
        
        <br>

        <h3 class="display-8 mt-4 mb-2">Contact Address</h3>

        <!-- The bottom table is for 2nd table -->
        <table id="table2">
            <tbody>
                <tr>
                    <td><b>Conference Chair</b></td>
                    <td>conferencechair@conference.com</td>
                </tr>

                <tr>
                    <td><b>Organisation</b></td>
                    <td>Organisation@conference.com</td>
                </tr>
                
                <tr>
                    <td> <b>Supporter Liaison</b></td>
                    <td>support@conference.com</td>
                </tr>
            </tbody>
        </table>

@endsection