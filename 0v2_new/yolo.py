from ultralytics import YOLO
#yoloを実行
model = YOLO('model/fish.pt')
results = model("uploads/img.jpg",save=True,save_txt=True)


#print("hello!")