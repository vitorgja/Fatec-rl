
public class WindowsAdapter implements Linux{
	private Windows w;//Dos

	public WindowsAdapter(Windows w) {
		this.w = w;
	}

	@Override
	public void linuxCall() {
		w.windowsCall();
	}
	
}
