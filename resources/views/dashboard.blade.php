<x-app-layout>
     
    <div style="background-color: #131B31; padding: 20px; border-radius: 8px; max-width: 400px; margin: 5% auto; color: #fefefe; font-family: Ubunto, sans-serif;">
        <form>
            <div style="margin-bottom: 15px;">
                <label style="display: block; font-weight: bold; margin-bottom: 5px;">Title</label>
                <input type="text" name="title" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc; color: #222222;">
            </div>
            <div style="margin-bottom: 15px;">
                <label style="display: block; font-weight: bold; margin-bottom: 5px;">Description</label>
                <input type="text" name="description" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc; color: #222222;">
            </div>
            <div style="margin-bottom: 15px;">
                <label style="display: block; font-weight: bold; margin-bottom: 5px;">Upload a Image</label>
                <input type="file" name="image" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
            </div>
            <div style="margin-bottom: 15px;">
                <x-button class="w-full mt-3">
                   Submit
                </x-button>
            </div>
        </form>
    </div>
    
</x-app-layout>
