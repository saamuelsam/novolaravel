

@csrf()
  <div class="textb2">
    <input class="inputb2" type="text" placeholder="Assunto" name="subject" value="{{ $support->subject ?? old('subject') }}"> <!-- o old diz se tem um valor ele vai persistir esse valor -->
    
    <textarea  name="body" cols="30" rows="5" style="resize: none;">{{ $support->body ?? old('body')}}</textarea>
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>