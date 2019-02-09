<section class="section  section_3">
    <div class="container">
        <div class="red-title text-center text-uppercase">SEND US</div>
        <div class="mini-title pt-4 text-center text-4a">Complete the form below with your resume attached, and someone from our team will contact you.</div>
        <form action="{{ url('../send_resume') }}" method="post" enctype="multipart/form-data" id="main-form" class="pt-sm-4 main-form text-center">
            <input id="submit-input" type="submit" style="display: none">
            Hello, my name is <input type="text" name="username" class="input-text" placeholder="enter your name" autocomplete="nope" required>.
            I am a <input type="text" name="nationality" class="input-text" placeholder="enter nationality" autocomplete="nope" required>. </br>
               
            Looking for a
            <select class="input-select" name="position" required>
                <option selected value="">select position</option>
                <option>2nd Engineer</option>
                <option>2nd Officer</option>
                <option>3rd Engineer</option>
                <option>AB</option>
                <option>Automation</option>
                <option>Barge Admin</option>
                <option>Barge Foreman</option>
                <option>Bosun</option>
                <option>Cable Lay Engineer</option>
                <option>Cable Lay Tech</option>
                <option>Chief Engineer</option>
                <option>Chief Officer</option>
                <option>Civil</option>
                <option>Coating & Painting</option>
                <option>Commissioning</option>
                <option>Construction</option>
                <option>Contracts</option>
                <option>Crane Operator</option>
                <option>Design Engineer</option>
                <option>Dimensional</option>
                <option>Document control</option>
                <option>DPO</option>
                <option>E&I Engineer</option>
                <option>E&I Supervisor</option>
                <option>E&I Technician</option>
                <option>Electrical Engineer</option>
                <option>Electrician</option>
                <option>ETO</option>                
                <option>FEED</option>
                <option>Field Engineer</option>
                <option>HSE Officer</option>
                <option>HSE/QHSE</option>
                <option>HVAC</option>
                <option>I&C Engineer</option>
                <option>Inspection</option>
                <option>Instrumentation Engineer</option>
                <option>L&D</option>
                <option>Machinist</option>
                <option>Maintenance</option>
                <option>Manufacturing</option>
                <option>Master</option>
                <option>Materials Management</option>
                <option>Mechanic</option>
                <option>Mechanical Engineer</option>
                <option>Mechanical Fitter</option>
                <option>Medic</option>
                <option>Motorman</option>
                <option>NDT</option>
                <option>Oiler</option>
                <option>OIM</option>
                <option>Operations</option>
                <option>Pipe Fitter</option>
                <option>Piping Engineer</option>
                <option>Piping Foreman</option>
                <option>Process</option>
                <option>Project Controls</option>
                <option>Project Management</option>
                <option>Proposals & Tender</option>
                <option>QA/QC</option>
                <option>Radio Operator</option>
                <option>Rigger</option>
                <option>Rope Access</option>
                <option>ROV</option>
                <option>Scaffolder</option>
                <option>SDPO</option>
                <option>Structural Engineer</option>
                <option>Superintendent</option>
                <option>Supply Chain</option>
                <option>Welder</option>
                <option>Welder Foreman</option>
            </select>
            position in the
            <select class="input-select" name="industry" required>
                <option selected value="">select industry</option>
                <option>Construction</option>
                <option>Marine & Offshore</option>
                <option>Oil & Gas</option>
                <option>Petrochemical / Chemicals</option>
                <option>Renewable Energy</option>
                <option>Shipbuilding / Ship repair</option>
            </select>
            industry.</br>

            You may reach me at <input type="email" name="email" class="input-text" placeholder="enter email address" required>
            and my mobile <input type="text" name="phone" class="input-text" placeholder="enter number" autocomplete="nope" required>. </br>

            <select class="input-select" name="available" required>
                <option selected value="">Select yes or no</option>
                <option>Yes</option>
                <option>No</option>
            </select>
            , I'm available immediately.
            <input type="file" name="resume_file" id="attach">
            <label for="attach" id="attach-label">Attach my resume.<div class="mail-line-bold"></div></label>
        </form>
        <div class="flex-justify-align">
            <label for="attach" id="attach-ico">
                <span class="icon"></span>
                <span class="icon-text">resume_for_lionglobalhr.docx</span>
            </label>
        </div>
        <div class="attached-files"></div>
    </div>
    <a href="javascript:void(0)" id="submit-form-btn" class="btn bg-red" onclick="document.getElementById('submit-input').click();">SEND</a>
</section>

