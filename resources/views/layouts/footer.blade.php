	<!-- Footer code -->
	<footer class="footer mt-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-10 text-left">
					© 2023 Web Development Conference; <a href="">Privacy</a> · <a href="">Terms</a>
				</div>

				<div class="col-2 text-right">
					<a href="">Back to top</a>
				</div>
			</div>
		</div>
	</footer>

	<!-- Bottom div is for the modal (Registration page) -->
	<div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="false">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Registration</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body">
					<form action="#nowhere">
					<div class="mb-3">
						<label for="fName" class="form-label">First Name</label>
						<input type="text" class="form-control" id="fName" aria-describedby="fName" required>
					</div>

					<div class="mb-3">
						<label for="lName" class="form-label">Last Name</label>
						<input type="text" class="form-control" id="lName" aria-describedby="lName" required>
					</div>

					<div class="mb-3">
						<label for="inputEmail" class="form-label">Email Address</label>
						<input type="email" class="form-control" id="inputEmail" aria-describedby="email" required>
							<div id="email-help" class="form-text">
								We'll never share your email with anyone else
							</div>
					</div>

					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" aria-describedby="password" required>
					</div>

					<div class="mb-3">
						<label for="cPassword" class="form-label">Confirm Password</label>
						<input type="password" class="form-control" id="cPassword" aria-describedby="password" required>
					</div>

					<div class="mb-3">
						<label class="form-label">Are you a research student?</label>
						<input type="radio" name="yes" id="yes" value="yes" required>
						<label for="yes">Yes</label>
						<input type="radio" name="no" id="no" value="no" required>
						<label for="no">No</label>
					</div>

					<div class=" mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="check" required>
						<label for="check" class="form-check-label">I acknowledge that I have read and understand the terms and conditions</label>
					</div>

					<button type="submit" class="btn btn-danger">Submit</button>
					</form>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>
		
