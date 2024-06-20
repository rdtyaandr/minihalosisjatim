<style>
 .form-container {
    width: 50%;
    margin: 0 auto;
    background-color: #f5f5f5;
    padding: 20px;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  .form-item {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
  }

  input[type="text"], input[type="number"], select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
  }

  button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }

  button:hover {
    background-color: #45a049;
  }
</style>

<div class="form-container">
  <div class="form-item">
    <label for="nup">Select Location</label>
    <select id="nup">
      <option value="">Select</option>
      <option value="ipds">IPDS</option>
      <option value="keuangan">Keuangan</option>
      <option value="perpustakaan">Perpustakaan</option>
    </select>
  </div>
  <div class="form-item">
    <button id="ok-button">OK</button>
  </div>
</div>