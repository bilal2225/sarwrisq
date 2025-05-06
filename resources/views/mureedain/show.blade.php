@extends('layouts') <!-- Extend your main layout if you have one -->

@section('content')
    <style>
        body {
            background-color: #8B0000; /* Dark Red */
            font-family: Arial, sans-serif;
            color: white;
        }

        .detail-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #F5F5F5; /* Light Gray */
            border: 2px solid #000000; /* Black border */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        h1, h2 {
            color: #8B0000; /* Gold/Yellow */
            text-align: center;
            font-weight: bold;
        }

        .label {
            font-weight: bold;
            color: #8B0000; /* Gold */
            min-width: 200px;
        }

        .value {
            font-weight: bold;
            color: #000; /* Dark text */
            text-decoration: underline;
            text-decoration-color: red;
            text-decoration-thickness: 2px;
        }

        .profile-picture {
            max-width: 150px;
            display: block;
            margin: 0 auto 20px;
            border: 2px solid black;
            border-radius: 10px;
        }

        .row-line {
            display: flex;
            align-items: center;
            /* justify-content: space-between; */
            gap: 100px;
            margin-bottom: 12px;
        }

        .back-btn {
            display: block;
            text-align: center;
            margin-top: 30px;
        }
    </style>

    <div class="container">
        <div class="detail-container">

            <h1>VIEW BIO DATA (MUREEDAIN)</h1>
            <p class="text-center text-danger"><strong>Tehreek Dawat-e-Faqr</strong></p>

            <!-- Profile Picture -->
            @if ($mureedain->picture)
                <img src="{{ asset('storage/' . $mureedain->picture) }}" alt="Profile Picture" class="profile-picture">
            @else
                <p class="text-center text-danger">No profile picture available.</p>
            @endif

            <!-- Data Rows -->
            <div class="data-section">
                <div class="row-line">
                    <span class="label">Name</span>
                    <span class="value">{{ $mureedain->name ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Father Name</span>
                    <span class="value">{{ $mureedain->father_name ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">CNIC#</span>
                    <span class="value">{{ $mureedain->cnic ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Date of Birth</span>
                    <span class="value">{{ $mureedain->date_of_birth ? \Carbon\Carbon::parse($mureedain->date_of_birth)->format('d M Y') : 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">City</span>
                    <span class="value">{{ $mureedain->city ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Street#</span>
                    <span class="value">{{ $mureedain->street ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">District</span>
                    <span class="value">{{ $mureedain->district ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Tehsil</span>
                    <span class="value">{{ $mureedain->tehsil ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Country</span>
                    <span class="value">{{ $mureedain->country ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Province</span>
                    <span class="value">{{ $mureedain->province ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Contact (Primary)</span>
                    <span class="value">{{ $mureedain->contact_primary ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Contact (Secondary)</span>
                    <span class="value">{{ $mureedain->contact_secondary ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Qualification</span>
                    <span class="value">{{ $mureedain->qualification ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Blood Group</span>
                    <span class="value">{{ $mureedain->blood_group ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Job/Business</span>
                    <span class="value">{{ $mureedain->job_business ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Nature of Job/Business</span>
                    <span class="value">{{ $mureedain->nature_of_job_business ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Bayat Date</span>
                    <span class="value">{{ $mureedain->bayat_date ? \Carbon\Carbon::parse($mureedain->bayat_date)->format('d M Y') : 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Email</span>
                    <span class="value">{{ $mureedain->email ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">TDF Department</span>
                    <span class="value">{{ $mureedain->department_tdf ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Bayat By</span>
                    <span class="value">{{ $mureedain->bayat_by ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Filled By</span>
                    <span class="value">{{ $mureedain->filled_by ?? 'N/A' }}</span>
                </div>

                <div class="row-line">
                    <span class="label">Signature</span>
                    <span class="value">{{ $mureedain->signature ?? 'N/A' }}</span>
                </div>
            </div>

            <!-- Back Button -->
            <div class="back-btn">
                <a href="{{ route('mureedain.index') }}" class="btn btn-primary">Back to List</a>
            </div>

        </div>
    </div>

@endsection