 <!-- create modal -->
 <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="createModalLabel">Create New Post</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="{{ route('post.create') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="mb-3">
                         <label for="postImage" class="form-label">Upload Image</label>
                         <input type="file" class="form-control" id="postImage" name="image" required>
                     </div>
                     <div class="mb-3">
                         <label for="postCaption" class="form-label">Caption</label>
                         <textarea class="form-control" id="postCaption" name="caption" rows="3"></textarea>
                     </div>
                     <button type="submit" class="btn btn-primary w-100">Post</button>
                 </form>
             </div>
         </div>
     </div>
 </div>
