#!/usr/bin/env python
# coding: utf-8

# Importing Required Libraries

# In[11]:


# Importing libraries
import numpy as np
import pandas as pd
from scipy.stats import mode
import matplotlib.pyplot as plt
import seaborn as sns
from sklearn.preprocessing import MinMaxScaler
from sklearn.model_selection import train_test_split, cross_val_score
from sklearn.svm import SVC
from sklearn.naive_bayes import GaussianNB
from sklearn.ensemble import RandomForestClassifier
from sklearn.metrics import accuracy_score, confusion_matrix, classification_report
from IPython import get_ipython

get_ipython().run_line_magic('matplotlib', 'inline')


# Data Collection and Pre-processing

# In[12]:


#Importing Dataset
Dataset_Path = "C:/Users/user/Downloads/cancer-patient-data-sets.xlsx"
data = pd.read_excel(Dataset_Path)


# In[13]:


data


# In[14]:


#checking the dataset balanced or not
level_counts = data["Level"].value_counts()
temp_df = pd.DataFrame({
    "Cancer Level": level_counts.index,
    "Counts": level_counts.values
})
 
plt.figure(figsize = (18,8))
sns.barplot(x = "Cancer Level", y = "Counts", data = temp_df)
plt.xticks(rotation=90)
plt.show()


# In[15]:


# Dropping the 'Patient Id' column
data = data.drop(['Patient Id'], axis=1)

# Replacing string values with numeric values in the column "Level"
data.loc[data.Level == 'Low', 'Level'] = 0
data.loc[data.Level == 'Medium','Level'] = 1
data.loc[data.Level == 'High', 'Level'] = 2
# 2 for 'High', 1 for 'Medium' and 0 for 'Low'

#Set integer as the datatype of column "Level"
data['Level'] = data['Level'].astype(int)


# In[16]:


data


# In[17]:


# Checking whether the dataset has any null values or not
data.isnull().sum()


# In[18]:


#Showing Correlation using Heatmap
fig, ax = plt.subplots(figsize=(20,20))         # figsize in inches
sns.heatmap(data.corr(), annot=True, linewidths=2, ax=ax)


# Splitting the Dataset for Training and Testing Model

# In[19]:


X = data.drop(columns='Level', axis=1)
# X contains the Symptoms columns 
Y = data['Level']
# Y contains the Target column


# In[20]:


X


# In[21]:


Y


# In[22]:


X_train, X_test, Y_train, Y_test = train_test_split(X, Y, test_size=0.25, stratify = Y, random_state = 2)


# In[23]:


print(f"Train: {X_train.shape}, {Y_train.shape}")
print(f"Test: {X_test.shape}, {Y_test.shape}")


# In[24]:


X_train


# In[25]:


Y_train


# In[26]:


# Defining scoring metric for k-fold cross validation
def cv_scoring(estimator, X, Y):
	return accuracy_score(Y, estimator.predict(X))

# Initializing Models
models = {"SVC":SVC(), 
          "Gaussian NB":GaussianNB(), 
          "Random Forest":RandomForestClassifier()
          
}

# Producing cross validation score for the models
for model_name in models:
    model = models[model_name]
    scores = cross_val_score(model, X_train, Y_train, cv = 10, n_jobs = -1, scoring = cv_scoring)
    print("-"*80)
    print(model_name)
    print(f"Scores: {scores}")
    print(f"Mean Score: {np.mean(scores)*100}")


# In[27]:


# Training and testing SVM Classifier
svm_model = SVC()
svm_model.fit(X_train, Y_train)
preds1 = svm_model.predict(X_test)
 
print(f"Accuracy on train data by SVM Classifier: {accuracy_score(Y_train, svm_model.predict(X_train))*100}")
 
print(f"Accuracy on test data by SVM Classifier: {accuracy_score(Y_test, preds1)*100}")
cf_matrix = confusion_matrix(Y_test, preds1)
plt.figure(figsize=(10,10))
sns.heatmap(cf_matrix, annot=True)
plt.title("Confusion Matrix for SVM Classifier on Test Data")
plt.show()
#Showing Precesion, Recall and F1 score
print(classification_report(Y_test, preds1))


# In[28]:


# Training and testing Naive Bayes Classifier
nb_model = GaussianNB()
nb_model.fit(X_train, Y_train)
preds2 = nb_model.predict(X_test)
print(f"Accuracy on train data by Naive Bayes Classifier: {accuracy_score(Y_train, nb_model.predict(X_train))*100}")
 
print(f"Accuracy on test data by Naive Bayes Classifier: {accuracy_score(Y_test, preds2)*100}")
cf_matrix = confusion_matrix(Y_test, preds2)
plt.figure(figsize=(10,10))
sns.heatmap(cf_matrix, annot=True)
plt.title("Confusion Matrix for Naive Bayes Classifier on Test Data")
plt.show()
#Showing Precesion, Recall and F1 score
print(classification_report(Y_test, preds2))


# In[29]:


# Training and testing Random Forest Classifier
rf_model = RandomForestClassifier(random_state=18)
rf_model.fit(X_train, Y_train)
preds3 = rf_model.predict(X_test)
print(f"Accuracy on train data by Random Forest Classifier: {accuracy_score(Y_train, rf_model.predict(X_train))*100}")
 
print(f"Accuracy on test data by Random Forest Classifier: {accuracy_score(Y_test, preds3)*100}")
 
cf_matrix = confusion_matrix(Y_test, preds3)
plt.figure(figsize=(10,10))
sns.heatmap(cf_matrix, annot=True)
plt.title("Confusion Matrix for Random Forest Classifier on Test Data")
plt.show()
#Showing Precesion, Recall and F1 score
print(classification_report(Y_test, preds3))


# Building Prediction System based on SVM Model

# In[30]:



# In[31]:


fig, ax=plt.subplots()
plot = sns.countplot(data=data, x='Level', hue='Gender', palette=['blue','green'])


# In[32]:


g1 = sns.countplot(x="Gender", hue="Level",data = data)


# In[33]:


sns.pairplot(x ='Alcohol use', hue ='Age')
# to show
plt.show()


# In[ ]:


plt.figure(figsize = (25,12))
g1 = sns.countplot(x="Age", hue="Level",data = data)
plt.show()


# In[ ]:


plt.figure(figsize = (20,10))
plot=sns.scatterplot(data=data, x='Alcohol use',y='Smoking', hue='Level',s=80, marker='o')
plt.show()


# In[34]:


import pickle


# In[35]:



with open('model_pick', 'wb') as f:
    pickle.dump(svm_model, f)


# In[ ]:




